<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller{
    public function index(){
        $this->user_model->checkAdminLogined();
        $this->load->view("registerView");
    }
}