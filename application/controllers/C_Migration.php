<?php defined("BASEPATH") or exit("No direct script access allowed");

class C_Migration extends CI_Controller{

    public function __construct(){
      parent:: __construct();
        if(empty($this->session->userdata('ses_username'))) redirect(base_url("l"));
  	}

    public function index($version){
            $this->load->library("migration");
          if(!$this->migration->version($version)){
              show_error($this->migration->error_string());
          }
    }
}
