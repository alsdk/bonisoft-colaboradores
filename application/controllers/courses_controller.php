<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses_controller extends CI_Controller {
    // As we use codeigniter as framework we declare a controller extending CI 
    
    function __construct() 
    {
        parent::__construct();
 		
        // To load the CI benchmark and memory usage profiler - set 1==1.
        if (1==2) 
        {
            $sections = array(
                    'benchmarks' => TRUE, 'memory_usage' => TRUE, 
                    'config' => FALSE, 'controller_info' => FALSE, 'get' => FALSE, 'post' => FALSE, 'queries' => FALSE, 
                    'uri_string' => FALSE, 'http_headers' => FALSE, 'session_data' => FALSE
            ); 
            $this->output->set_profiler_sections($sections);
            $this->output->enable_profiler(TRUE);
        }
		
        // Load required CI libraries and helpers.
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');

        // IMPORTANT! This global must be defined BEFORE the flexi auth library is loaded! 
        // It is used as a global that is accessible via both models and both libraries, without it, flexi auth will not work.
        $this->auth = new stdClass;

        // Load 'standard' flexi auth library by default.
        $this->load->library('flexi_auth');	

        // Check user is logged in as an admin.
        // For security, admin users should always sign in via Password rather than 'Remember me'.
        if (! $this->flexi_auth->is_logged_in_via_password() || ! $this->flexi_auth->is_admin()) 
        {
            // Set a custom error message.
            $this->flexi_auth->set_error_message('You must login as an admin to access this area.', TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('auth');
        }

        // Note: This is only included to create base urls for purposes of this application "COLABORADORES" only
        $this->load->vars('current_url', $this->uri->uri_to_assoc(1));

        // Define a global variable to store data that is then used by the end view page.
        $this->data = null;
        /**
         * @author Mariano Salinas <alsdk69@gmail.com>
         * Create a new global array for storing information about collaborator's courses
         */
        $this->data['table_courses'] = null;
        
        // Cargamos los modelos que usamos en varias funciones (metodos)
        $this->load->model('courses_model', 'cur');
        $this->load->model('colab_courses_model');
        
    }


	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Courses EDITION - Insert and update
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * index
	 * Forwards to the edit_courses() function (method).
	 */ 
	function index()
        {
		$this->edit_courses();
	}
 

        
// Inicio código Antonio
  	/**
 	 * list_user_id
 	 * Display a list of users filter by id. 
 	 */ 
            function list_colaboradores_filtrados($campo = NULL, $valor = NULL)
            {
                    // Check user has privileges to view user accounts, else display a message to notify the user they do not have valid privileges.
                    if (! $this->flexi_auth->is_privileged('View Users'))
                    {
                            $this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to view user accounts.</p>');
                            redirect('auth_admin');		
                    }
                    
                    if (isset($campo)){
                        $this->data['page_title'] = $campo;
                        $this->data['campo_filtro'] = $campo;
                    }
                    
                    if(isset($_POST['valor_filtro'])){
//                        print_r("entra");
                        $valor = $_POST['valor_filtro'];
                       // print_r($valor);
                        
                        $this->load->model('colab_auth_admin_model');
                        
//                        $this->load->model('colab_auth_admin_model');
//			$this->colab_auth_admin_model->delete_users($inactive_days);
                        
                        
                        //$this->data['users'] = $this->colab_auth_admin_model->get_colaboradores_filtrados($campo, $valor);
                        $this->data['users'] = $this->colab_auth_admin_model->get_colaboradores_filtrados($campo, $valor);
                    }
                    //print_r("sale");
//                    print_r($this->data['users']);
//
//                    // The view associated with this controller method is used by multiple methods, therefore set a page title.
//                    
//                  //  $this->data['status'] = ($status == 'inactive') ? 'inactive_users' : 'active_users'; // Indicate page function.
//
                    $this->data['titulo'] = "Consulta de colaboradores";
                    $this->load->view('colab/admin/colaboradores_filtrados_view', $this->data);		
            }
// Fin código Antonio
            
            
            
/**
 *  COURSES  by Jose Miguel Bonilla 
 * @copyright (c) 2014, BONISOFT Soluciones Informáticas
 */
    /**
     * @author Jose Miguel Bonilla Silio <info@bonisoft.com>
     * @param type $course_id OPTIONAL if indicated shows that course for edition
     * if empty show form for new course insertion
     */        
    function edit_courses($course_id = NULL) {
//        $this->load->model('courses_model', 'cur');
        /**
         * @author Mariano Salinas <alsdk69@gmail.com>
         * @todo merge model colab_courses_model into courses_model (currently two course models)
         * Model where more courses methods are in
         */
       // $this->load->model('colab_courses_model');
        
        //print_r($this->flexi_auth->is_privileged('Edit Courses'));
        
        // @todo:  Check IF user has privileges to EDIT COURSES, else display a message to notify the user they do not have valid privileges.
//        if (!$this->flexi_auth->is_privileged('Edit Courses'))
//        {
//            $this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to Edit courses.</p>');
//            redirect('auth_admin');
//        }
         
        //si tenenemos un id curso cargamos los datos en el mismo formulario 
        if (isset($course_id)){
            $this->data['course'] = $this->cur->get_course($course_id);
            // Get user current data and set page title
            $this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
            $this->data['titulo'] = 'Planning de los cursos y clientes';

            foreach ($array_courses->result() as $row) {
                  if (!empty($row->course_collaborator_id)) {
                    //$this->data['total_courses'] = $array_courses->num_rows();
                    $this->data['table_courses'] .= "<tr>
                                            <th>" . $row->course_date . "</th>
                                            <th>" . $row->course_students_id . "</th>
                                            <th>" . $array_courses->num_rows() . "</th>
                                           </tr>";
                  }  
              }
        } else {
          // Datos iniciales para insertar un nuevo registro
            //$this->data['course']['course_date'] = "2014-03-17";//$this->cur->get_course($course_id);
            $this->data['course']['course_students_id'] = "0";
            //$this->data['course']['course_upro_asoc_id'] = "0";
        }
        
		// @todo: && $this->flexi_auth->is_privileged('Edit Courses'))
        // If 'Course edition' form has been submitted, will lookup the users email address and first and last name.
        if ($this->input->post('update_course_dates_inicio')) {
             //$fecha_unida = $this->input->post('update_course_date_year') . "-" . $this->input->post('update_course_date_month') . "-"  . $this->input->post('update_course_date_day');
             //print_r($fecha_unida);
             
            // Comprobamos para no duplicar los datos
                if (($this->cur->check_exist_course_collab($this->input->post('update_course_dates_inicio'), $this->input->post('update_course_students_id'), $this->input->post('update_upro_asoc_id'))) || ($this->input->post('update_course_students_id') == 0))  {
                //@Todo: está intentando introducir dos veces los mismos datos, corriga el dato correspondiente
                //print_r("EXITE , será que pienso?");
            } else {
                if ($this->cur->insert_course()){ // NO EXISTE, lo insertamos
                 //$this->load->model('courses_model');
                $this->data['message'] = 'insert / update_successful';
                //$upro_id_collaborator =
                $email = $this->cur->get_email_collaborator($this->input->post('update_course_upro_asoc_id'));
              //  $email = $this->flexi_auth_model->get_email($upro_id_collaborator);
                $email_data['fecha'] = $this->input->post('update_course_dates_inicio');
                //$email_data['fecha'] = $fecha_unida;
                /**
                * @todo SEND EMAIL ANEXO 2, create plantilla with doc
                */
                
                 $this->flexi_auth->send_email($email, 'Studen Registration', 'student_registration_collaborator.tpl.php', $email_data);
                }
            }

            
        }
        // Set any returned status/error messages.
        $this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		
        $this->data['titulo'] = "Insertar cursos por colaborador";
        
        /**
         * @author Mariano Salinas <alsdk69@gmail.com>
         * List all courses for all collaborators
         */
        $this->colab_courses_model->get_courses();
        
        //$this->load->view('colab/admin/insert_collaborators_courses_view', $this->data);
        $this->load->view('colab/admin/insert_collaborators_courses_view', $this->data);
        
    }
        
        /**
         * 
         * @author Antonio Rosado
         * @param type $course_id, identificador del curso a borrar
         */
        function delete_course($course_id){
            $this->cur->delete_course($course_id);
            $this->list_courses();
        }
    
        /**
         * Introducir fechas cursos en la tabla Courses
         * 
         * @author Antonio Rosado
         */
        function insert_courses() {
            // Get user current data and set page title
//            $this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
//            $this->data['titulo'] = 'Fechas de los cursos';
           
        $dia = $this->input->post('update_course_date_day');
        $mes = $this->input->post('update_course_date_month');
        $año = $this->input->post('update_course_date_year');
        
        // If 'course insertion' form has been submitted
        if ($dia && $mes && $año) {
            // Concateno las fecha que viene en día, mes y año, y le doy la vuelta para insertarla en formato americano
            $course_dates_inicio = $año . "-" . $mes . "-"  . $dia;
            // Comprobamos para no duplicar los datos
            if ($this->cur->check_exist_course_dates($course_dates_inicio, $this->input->post('course_description'))) {
                //@Todo: está intentando introducir dos veces los mismos datos, corrija el dato correspondiente
                //print_r('esta repetido');
            } elseif ($this->cur->insert_course_dates()){
                $this->data['message'] = 'insert successful';
            }
        }
         $this->list_courses();
    }

    
    function list_courses(){
        $array_courses = $this->cur->get_courses(); //devuelve el $array_courses
        // Print results in table rows
            
        foreach ($array_courses->result() as $row) {
           if (!empty($row->course_dates_id)) {
                $this->data['table_courses'] .= "<tr>
                                                    <td>" . $row->course_dates_id . "</td>
                                                    <td>" . $row->course_dates_inicio . "</td>
                                                    <td>" . $row->course_dates_descripcion . "</td>
                                                    <td><a href=" . base_url(). "courses_controller/delete_course/" . $row->course_dates_id . ">Eliminar</a></td>
                                                </tr>";
            }
         }
        $this->data['titulo'] = "Insertar/Eliminar Curso";
        $this->load->view('colab/admin/courses_view', $this->data);
    }
}

/* End of file auth_admin.php */
/* Location: ./application/controllers/auth_admin.php */