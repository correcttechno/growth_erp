<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Positions extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('positions_model');
    }

    public function index(){
        $results=$this->positions_model->read();
        $this->load_model->load('positionsView',array('results'=>$results));
    }

    public function add(){
        $title      =$this->input->post('title',true);
        $content    =$this->input->post('content',true);
        $id         =$this->input->post('id',true);

        $response=array(
            'title'     =>'',
            'content'   =>$content,
            'status'    =>false,
        );

        if(!empty($title)){
            $ar=array(
                'title'=>$title,
                'content'=>$content,
            );
            $this->positions_model->add($ar,$id);
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
            $this->positions_model->delete($id);
        }
        echo json_encode(array('status'=>true));
    }

    public function read_row(){
        $id=$this->input->post('id',true);
        if(!empty($id)){
            $result=$this->positions_model->read_row($id);
            if($result){
                echo json_encode($result);
            }
        }
    }

    

}