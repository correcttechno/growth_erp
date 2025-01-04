<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reports_type extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->user_model->checkAdminLogined();
        $this->load->model('reports_model');
        $this->load->model("departments_model");
    }

    public function index(){
        $departments    =$this->departments_model->read();
        $results=$this->reports_model->read();
        $this->load_model->load('reportstypeView',array('results'=>$results,'departments'=>$departments,));
    }

    public function add(){
        $title      =$this->input->post('title',true);
        $id         =$this->input->post('id',true);
        $dep_id     =$this->input->post('department_id',true);

        $response=array(
            'title'=>'',
            'status'=>false,
        );

        if(!empty($title)){
            $ar=array('title'=>$title,'department_id'=>$dep_id);
            $this->reports_model->add($ar,$id);
            $response['status']=true;
        }
        else{
            $response['title']="Zəhmət olmasa xanaları doldurun !";
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