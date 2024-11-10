<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->user_model->checkLogined();
        $this->load->model("static/user_model");
    }

    public function index(){
        $this->load->model("positions_model");
        $this->load->model("departments_model");

        $userdata=$this->user_model->get_userdata();
        $userdata['position']=$this->positions_model->read_row($userdata['position_id']);
        $userdata['department']=$this->departments_model->read_row($userdata['department_id']);

        $this->load_model->load("profileView",array('userdata'=>$userdata));
    }
    
}