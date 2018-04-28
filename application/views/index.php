<?php
defined('BASEPATH') OR exit("No direct access!");

$ses_uname = $this->session->userdata('ses_username');

$values["ses_uname"] = $ses_uname;

$this->load->view('templates/header/v_header_head',@$values);

if(empty($ses_uname)) $this->load->view("templates/header/v_header_user_style");

if(!empty($ses_uname)) {
    $this->load->view('templates/header/v_header_admin_body',@$values);
    if($view=="v_input") $this->load->view('templates/input_atas',@$values);
} else {
    $this->load->view('templates/header/v_header_user_body',@$values);
    switch($view) {
        case "v_login": $this->load->view('templates/header/v_header_user_login',@$values); break;
        default: $this->load->view('templates/header/v_header_user_main',@$values); break;
    }
}

$this->load->view($view,@$values);

if(!empty($ses_uname)) {
    if($view=="v_input") $this->load->view('templates/input_bawah',@$values);
    $this->load->view('templates/footer/v_footer_admin',@$values);
} else {
    switch($view) {
        case "v_login":  $this->load->view('templates/footer/v_footer_login_fragment',@$values); break;
        default:  $this->load->view('templates/footer/v_footer_user_fragment',@$values); break;
    }
}

switch($view) {
    case "admin/v_dashboard":
        $this->load->view('templates/footer/v_footer_admin_dashboard.php',@$values);
        break;

}

$this->load->view('templates/footer/v_footer_scripts',@$values);
