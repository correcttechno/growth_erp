<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports1C extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->user_model->checkLogined();
        $this->load->model("reports1c_model");
        $this->load->model("customers_model");
        $this->load->model("employees_model");
    }

    public function index(){
        $customers      =$this->customers_model->read();
        $this->load_model->load('reports1CView',array('results'=>$customers));
    }

    public function add(){
        $id             =$this->input->post('a_id',true);
        $customer_id    =$this->input->post('b_id',true);
        $response=array(
            'status'=>false,
            'msg'   =>'ee',
        );

        if(!empty($id) and !empty($customer_id)){
            if($this->reports1c_model->add_log($id,$customer_id)){
                $response['status']=true;
            }
            else{
                $response['msg']='Əməliyyat sizin tərəfinizdən icra edilə bilməz !';
            }
            
        }
        else{
            $response['msg']="Error";
        }
        echo json_encode($response);
      
    }

    public function delete(){
        $id=$this->input->post('delete_id',true);
        if(!empty($id)){
            $this->reports1C_model->delete($id);
        }
        echo json_encode(array('status'=>true));
    }

    public function read_row(){
        $id=$this->input->post('id',true);
        if(!empty($id)){
            $result=$this->reports1C_model->read_row($id);
            if($result){
                echo json_encode($result);
            }
        }
    }

    

}