<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_index extends CI_Controller {

	public function __construct(){
      parent:: __construct();
    }

    public function index(){
        if($this->session->userdata('ses_username')!== null){
			$this->load->view('templates/header');
			$this->load->view('templates/input_atas');
			$this->load->view('v_input');
			$this->load->view('templates/input_bawah');
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_user');
			$this->load->view('v_input');
			$this->load->view('templates/footer_user');
		}
    }
}