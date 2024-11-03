<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('tasks_model');
        $this->load->model("customers_model");
        $this->load->model("taskstype_model");
        $this->load->model("employees_model");
    }

    public function index(){
        $results=array();//$this->tasks_model->read();
        $customers      =$this->customers_model->read();
        $taskstype      =$this->taskstype_model->read();
        $employees      =$this->employees_model->read();
        $this->load_model->load('tasksView',array('results'=>$results,'customers'=>$customers,'taskstype'=>$taskstype,'employees'=>$employees));
    }

    public function add(){
        $title      =$this->input->post('title',true);
        $id         =$this->input->post('id',true);

        $response=array(
            'title'=>'',
            'status'=>false,
        );

        if(!empty($title)){
            $ar=array('title'=>$title);
            $this->tasks_model->add($ar,$id);
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
            $this->tasks_model->delete($id);
        }
        echo json_encode(array('status'=>true));
    }

    public function read_row(){
        $id=$this->input->post('id',true);
        if(!empty($id)){
            $result=$this->tasks_model->read_row($id);
            if($result){
                echo json_encode($result);
            }
        }
    }

    

}