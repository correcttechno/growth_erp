<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->user_model->checkLogined();
        $this->load->model('employees_model');
        $this->load->model("departments_model");
        $this->load->model("positions_model");
        $this->load->model("customers_model");
        $this->load->model('dashboard_model');
    }


    public function index(){
        $departments    =$this->departments_model->read();
        $positions      =$this->positions_model->read();
        $customers      =$this->customers_model->read();
        
        $results        =array();
        if($this->user_model->userdata['status']=='admin'){
            $results        =$this->employees_model->read();
        }
        else{
            $results=array($this->user_model->userdata);
        }

        $data=array(
            'results'       =>$results,
            'departments'   =>$departments,
            'positions'     =>$positions,
            'customers'     =>$customers,
        );
        $this->load_model->load('dashboardView',$data);
    }
}