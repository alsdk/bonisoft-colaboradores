<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mipanel extends CI_Controller{
    public function index() {
        // Load 'standard' flexi auth library by default.
        $this->load->library('flexi_auth');	
        $this->load->database();
        $this->load->view('misvistas/ejemplovista');
        
    }
}