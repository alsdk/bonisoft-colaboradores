<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {
/**
 * ark Admin Panel for Codeigniter 
 * Author: BONISOFT Soluciones Informaticas, SLNE-  http://www.bonisoft.com
 * Follow us at http://www.facebook.com/BONISOFT.ES
 *
 */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'user';
        $this->load->view('admin/vwManageUser',$arr);
    }

    public function add_user() {
        $arr['page'] = 'user';
        $this->load->view('admin/vwAddUser',$arr);
    }

     public function edit_user() {
        $arr['page'] = 'user';
        $this->load->view('admin/vwEditUser',$arr);
    }
    
     public function block_user() {
        // Code goes here
    }
    
     public function delete_user() {
        // Code goes here
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */