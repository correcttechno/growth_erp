<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->user_model->checkLogined();
        $this->load->model("departments_model");
        $this->load->model("reports_model");
        $this->load->model("customers_model");
    }

    public function index(){
        $departments=array();
        if($this->user_model->userdata['status'] == 'admin'){
            $departments    =$this->departments_model->read();
        }
        else{
            $departments[]=$this->departments_model->read_row($this->user_model->userdata['department_id']);
        }
        $customers      =$this->customers_model->read();
        $this->load_model->load('reportsView',array('departments'=>$departments,'results'=>$customers));
    }

    public function add(){
        $id             =$this->input->post('a_id',true);
        $customer_id    =$this->input->post('b_id',true);
        $response=array(
            'status'=>false,
            'msg'   =>'ee',
        );

        if(!empty($id) and !empty($customer_id)){
            $this->reports_model->add_log($id,$customer_id);
            $response['status']=true;
        }
        else{
            $response['msg']="Error";
        }
        echo json_encode($response);
      
    }

    public function delete(){
        $id=$this->input->post('delete_id',true);
        if(!empty($id)){
            $this->reports_model->delete($id);
        }
        echo json_encode(array('status'=>true));
    }

    public function read_row(){
        $id=$this->input->post('id',true);
        if(!empty($id)){
            $result=$this->reports_model->read_row($id);
            if($result){
                echo json_encode($result);
            }
        }
    }

    

}