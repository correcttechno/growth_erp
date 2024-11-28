<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->user_model->checkAdminLogined();
        $this->load->model('employees_model');
        $this->load->model("departments_model");
        $this->load->model("positions_model");
        $this->load->helper('password');
    }

    public function index(){
        $results        =$this->employees_model->read();
        $departments    =$this->departments_model->read();
        $positions      =$this->positions_model->read();
        $data=array(
            'results'       =>$results,
            'departments'   =>$departments,
            'positions'     =>$positions,
        );
        $this->load_model->load('employeesView',$data);
    }

    public function add(){
        $dep_id         =$this->input->post('department_id',true);
        $pos_id         =$this->input->post('position_id',true);
        $firstname      =$this->input->post('firstname',true);
        $lastname       =$this->input->post('lastname',true);
        $gender         =$this->input->post('gender',true);
        $birthday       =$this->input->post('birthday',true);
        $address        =$this->input->post('address',true);
        $email          =$this->input->post('email',true);
        $phone          =$this->input->post('phone',true);
        $password       =$this->input->post('password',true);
        $repassword     =$this->input->post('repassword',true);
        $content        =$this->input->post('content',true);
        $id             =$this->input->post('id',true);

        $response=array(
            'dep_id'        =>'',
            'pos_id'        =>'',
            'firstname'     =>'',
            'lastname'      =>'',
            'gender'        =>'',
            'birthday'      =>'',
            'address'       =>'',
            'email'         =>'',
            'phone'         =>'',
            'password'      =>'',
            'repassword'    =>'',
            'content'       =>$content,
            'status'        =>false,
        );

        if(!empty($dep_id) and !empty($pos_id) and !empty($firstname) and !empty($lastname) and !empty($phone) and !empty($address) and !empty($gender) and !empty($email)){
            $ar=array(
                'department_id'     =>$dep_id,
                'position_id'       =>$pos_id,
                'firstname'         =>$firstname,
                'lastname'          =>$lastname,
                'gender'            =>$gender,
                'birthday'          =>$birthday,
                'address'           =>$address,
                'email'             =>$email,
                'phone'             =>$phone,
                'password'          =>$password,
                'content'           =>$content,
                'token'             =>generate_token(),
            );

            if($password!=$repassword){
                $response['password']="Şifrələr uyğun deyil !";
            }
            else if(empty($id) and $this->employees_model->check_email($email)){
                $response['email']="Bu e-mail bir dəfə istifadə edilib !";
            }
            else{
                $this->employees_model->add($ar,$id);
                $response['status']=true;
            }
        }
        else{
            
            $response['content']="Zəhmət olmasa *-lu  xanaları doldurun !";
        }
        echo json_encode($response);
    }

    public function delete(){
        $id=$this->input->post('delete_id',true);
        if(!empty($id)){
            $this->employees_model->delete($id);
        }
        echo json_encode(array('status'=>true));
    }

    public function read_row(){
        $id=$this->input->post('id',true);
        if(!empty($id)){
            $result=$this->employees_model->read_row($id);
            if($result){
                unset($result['password']);
                echo json_encode($result);
            }
        }
    }

    

}