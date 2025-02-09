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
        $results        =$this->employees_model->read();
        $departments    =$this->departments_model->read();
        $positions      =$this->positions_model->read();
        $customers      =$this->customers_model->read();
        $data=array(
            'results'       =>$results,
            'departments'   =>$departments,
            'positions'     =>$positions,
            'customers'     =>$customers,
        );
        $this->load_model->load('dashboardView',$data);
    }
}