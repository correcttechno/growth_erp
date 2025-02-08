<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Documents extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->user_model->checkLogined();
        $this->load->model('documents_model');
    }


    public function index(){
        $activePath=$this->input->get('activePath',true);
        $results=$this->documents_model->read($activePath);
        $ar=array(
            'folders'   =>$results['folders'],
            'files'     =>$results['files'],
            'path'      =>$results['path'],
        );
        $this->load_model->load('documentsView',$ar);
    }

    public function add(){
        $title      =$this->input->post('title',true);
        $path       =$this->input->post('path',true);
        $id         =$this->input->post('id',true); 

        $response=array(
            'title'=>'',
            'status'=>false,
        );

        if(!empty($title)){
            $ar=array('title'=>$title);
            $response['msg']=$this->documents_model->add($path,$title);
            $response['status']=true;
        }
        else{
            $response['title']="Zəhmət olmasa xanaları doldurun !";
        }
        echo json_encode($response);
    }

    public function delete(){
        $id=$this->input->post('delete_id',true);
        $o_id=$this->input->post('o_id',true);
        $ar=array(
            'status'    =>false,
            'msg'       =>'',
        );
        if(!empty($id)){
            $ar['status']=$this->documents_model->delete($id,$o_id);
        }
        echo json_encode($ar);
    }

    public function addfile(){
        $this->load->model("static/upload_model");
        $path=$this->input->post('path',true);
        $this->upload_model->upload_multiple_files_custom_path($path);
        echo json_encode(array('status'=>true));
    }
}