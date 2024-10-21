<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('departments_model');
    }

    public function index(){
        $results=$this->departments_model->read();
        $this->load_model->load('departmentsView',array('results'=>$results));
    }

    public function add(){
        $title=$this->input->post('title',true);

        $response=array(
            'title'=>'',
            'status'=>false,
        );

        if(!empty($title)){
            $ar=array('title'=>$title);
            $this->database_model->insert("departments",$ar);
            $response['status']=true;
        }
        else{
            $response['title']="Zəhmət olmasa xanaları doldurun !";
        }
        echo json_encode($response);
    }

    public function delete(){
        $id=$this->input->post('id',true);
        if(!empty($id)){
            $this->departments_model->delete($id);
        }
        echo json_encode(array('status'=>true));
    }

}