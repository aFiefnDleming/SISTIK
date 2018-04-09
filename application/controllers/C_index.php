<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_index extends CI_Controller {

	public function __construct(){
      parent:: __construct();
    }

    public function index(){
        if($this->session->userdata('ses_username')!== null){
            redirect('index.php/C_crud');
        } else {
            $values['view'] = "v_input";
            $this->load->view('index',$values);
        }
    }
}
