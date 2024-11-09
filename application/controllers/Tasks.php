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
        $results        =$this->tasks_model->read();
        $customers      =$this->customers_model->read();
        $taskstype      =$this->taskstype_model->read();
        $employees      =$this->employees_model->read();
        
        $this->load_model->load('tasksView',array('results'=>$results,'customers'=>$customers,'taskstype'=>$taskstype,'employees'=>$employees));
    }

    public function add(){

        $tasktype_id    =$this->input->post('tasktype_id',true);
        $customer_id    =$this->input->post('customer_id',true);
        $content        =$this->input->post('content',true);
        $start          =$this->input->post('start',true);
        $end            =$this->input->post('end',true);
        $priority       =$this->input->post('priority',true);
        $users          =$this->input->post('users',true);
        $id             =$this->input->post('id',true);

        $response=array(
            'tasktype_id'   =>'',
            'customer_id'   =>'',
            'content'       =>'',
            'start'         =>'',
            'end'           =>'',
            'priority'      =>'',
            'file'          =>'',
            'users'         =>'',
            'status'        =>false,
            'msg'           =>'',
        );
       
        if(!empty($tasktype_id) and !empty($customer_id) and !empty($start) and !empty($end) and !empty($priority) and ($users!=Null and count($users)>0)){
            $ar=array(
                'creator_id'    =>$this->user_model->userdata['id'],
                'tasktype_id'   =>$tasktype_id,
                'customer_id'   =>$customer_id,
                'content'       =>$content,
                'start'         =>$start,
                'end'           =>$end,
                'priority'      =>$priority,
                'users'         =>json_encode($users),

            );
            $this->tasks_model->add($ar,$id);
            $response['status']=true;
        }
        else{
            $response['msg']="Zəhmət olmasa *-lu xanaları doldurun !";
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

    public function answer(){
        $task_id    =$this->input->post('id',true);
        $note       =$this->input->post('note',true);
        $status     =$this->input->post('status',true);

        $response=array(
            'status'        =>false,
            'msg'           =>'',
        );

        if(!empty($task_id)){
            $ar=array(
                'task_id'       =>$task_id,
                'user_id'       =>$this->user_model->userdata['id'],
                'note'          =>$note,
                'status'        =>$status,
            );
            $this->tasks_model->add_answer($ar);
            $response['status']=true;
        }
        else{
            $response['msg']="Error";
        }

        echo json_encode($response);
    }

    

}