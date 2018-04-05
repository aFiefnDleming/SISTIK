<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_index extends CI_Controller {

	public function __construct(){
      parent:: __construct();
    }

    public function index(){
        if(null!==($this->session->userdata('ses_username'))){
            $this->load->view('templates/header');
			$this->load->view('admin/v_input');
			$this->load->view('templates/footer');
        }else{
            $this->load->view('user/v_input');
        }
    }
}