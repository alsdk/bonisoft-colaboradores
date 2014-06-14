<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class colab_courses_model extends CI_Model {
    
    	// The following method prevents an error occurring when $this->data is modified.
	// Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
        
        /*
         * Unique ID given to each collaborator that allow to track all his courses, students and so on 
         * @param type $coupon_id OPTIONAL when setted it will only shows courses for a given collaborator
         * instead of all courses for all collaborators.
         * 
         * retrieve all collaborator's courses and students with their start date presented in table rows
         */
        function get_courses($coupon_id = null) {
            
            /* ORIGINAL QUE FUNCIONA
                      $query_cursos = "SELECT c.course_upro_asoc_id,
                                       c.course_date,
                                       GROUP_CONCAT(c.course_students_id SEPARATOR ',') AS alumnos,
                                       COUNT(c.course_students_id) AS suma
                                       FROM collaborators_course_list AS c
                                       INNER JOIN collaborators_user_profiles AS p ON c.course_upro_asoc_id = p.upro_asoc_id 
                                       WHERE p.upro_asoc_id = '" . $coupon_id . "'
                                       GROUP BY c.course_upro_asoc_id, c.course_date";
                      $array_courses = $this->db->query($query_cursos);

                      foreach ($array_courses->result() as $row) {
                          if (!empty($row->course_date)) {
                            $this->data['table_courses'] .= "<tr>
                                                    <th>" . $row->course_date . "</th>
                                                    <th>" . $row->alumnos . "</th>
                                                    <th>" . $row->suma . "</th>
                                                   </tr>";
                          }
                      }
                      return;
             */

            /*
             * consulta implicada:
             * "SELECT c.course_upro_asoc_id,
             *                         c.course_date,
             *                         GROUP_CONCAT(c.course_students_id SEPARATOR ',') AS alumnos,
             *                         COUNT(c.course_students_id) AS suma
             *                         FROM collaborators_course_list AS c
             *                         INNER JOIN collaborators_user_profiles AS p ON c.course_upro_asoc_id = p.upro_asoc_id 
             *                         WHERE p.upro_asoc_id = '" . $coupon_id . "'
             *                         GROUP BY c.course_upro_asoc_id, c.course_date"
             */
            // @todo code clean (two foreach, etc)
             $query_cursos = "SELECT c.course_upro_asoc_id,
                              c.course_date,
                              GROUP_CONCAT(c.course_students_id SEPARATOR ',') AS alumnos,
                              COUNT(c.course_students_id) AS suma
                              FROM collaborators_course_list AS c
                              INNER JOIN collaborators_user_profiles AS p ON c.course_upro_asoc_id = p.upro_asoc_id ";
                      
              // Filter by collaborator ID and get only courses belonging to him
              if (isset($coupon_id)) {
                  $query_cursos .= "WHERE p.upro_asoc_id = '" . $coupon_id . "'
                                    GROUP BY c.course_upro_asoc_id, c.course_date";
                  
                 // Do the query
                 $array_courses = $this->db->query($query_cursos);
              
                 // Print results in table rows
                 foreach ($array_courses->result() as $row) {
                   if (!empty($row->course_date)) {
                        $this->data['table_courses'] .= "<tr>
                            <th>" . $row->course_date . "</th>
                            <th>" . $row->alumnos . "</th>
                            <th>" . $row->suma . "</th>
                            </tr>";
                    }
                 }
              }
              // Otherwise we get all courses from all collaborators
              else {
                  $query_cursos .= "GROUP BY c.course_upro_asoc_id, c.course_date";
                  
                                   // Do the query
                 $array_courses = $this->db->query($query_cursos);
              
                 // Print results in table rows
                 foreach ($array_courses->result() as $row) {
                   if (!empty($row->course_date)) {
                        $this->data['table_courses'] .= "<tr>
                            <th>" . $row->course_upro_asoc_id . "</th>
                            <th>" . $row->course_date . "</th>
                            <th>" . $row->alumnos . "</th>
                            <th>" . $row->suma . "</th>
                            </tr>";
                    }
                 }
              }
              
              return;
         }
}

/* End of file colab_courses_model.php */
/* Location: ./application/models/colab_courses _model.php */
