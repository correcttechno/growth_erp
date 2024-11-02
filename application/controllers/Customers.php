<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('customers_model');
    }

    public function index(){
        $results=$this->customers_model->read();
        $this->load_model->load('customersView',array('results'=>$results));
    }

    public function add(){
      
        $firstname      =$this->input->post('firstname',true);
        $lastname       =$this->input->post('lastname',true);
        $phone          =$this->input->post('phone',true);
        $email          =$this->input->post('email',true);
        $birthday       =$this->input->post('birthday',true);
        $address        =$this->input->post('address',true);

        $rfirstname     =$this->input->post('rfirstname',true);
        $rlastname      =$this->input->post('rlastname',true);
        $rphone         =$this->input->post('rphone',true);
        $remail         =$this->input->post('remail',true);
        $rbirthday      =$this->input->post('rbirthday',true);
        $raddress       =$this->input->post('raddress',true);

        $customertype   =$this->input->post('customertype',true);
        $voen           =$this->input->post('voen',true);
        $countworkers   =$this->input->post('countworkers',true);
        $countobject    =$this->input->post('countobject',true);

        $bankname       =$this->input->post('bankname',true);
        $bankperson     =$this->input->post('bankperson',true);
        $bankphone      =$this->input->post('bankphone',true);
        
        $id             =$this->input->post('id',true);

        $response=array(
            'msg'       =>'',
            'status'    =>false,
        );

        if(!empty($firstname) and !empty($lastname)){
            $ar=array(
                "firstname"     => $firstname,
                "lastname"      => $lastname,
                "phone"         => $phone,
                "email"         => $email,
                "birthday"      => $birthday,
                "address"       => $address,
                "rfirstname"    => $rfirstname,
                "rlastname"     => $rlastname,
                "rphone"        => $rphone,
                "remail"        => $remail,
                "rbirthday"     => $rbirthday,
                "raddress"      => $raddress,
                "voen"          => $voen,
                "countworkers"  => $countworkers,
                "countobject"   => $countobject,
                "bankname"      => $bankname,
                "bankperson"    => $bankperson,
                "bankphone"     => $bankphone,
            );


            $this->customers_model->add($ar,$id);
            $response['status']=true;
        }
        else{
            $response['title']="Zəhmət * -lu xanaları doldurun !";
        }
        echo json_encode($response);
    }

    public function delete(){
        $id=$this->input->post('delete_id',true);
        if(!empty($id)){
            $this->customers_model->delete($id);
        }
        echo json_encode(array('status'=>true));
    }

    public function read_row(){
        $id=$this->input->post('id',true);
        if(!empty($id)){
            $result=$this->customers_model->read_row($id);
            if($result){
                echo json_encode($result);
            }
        }
    }

    

}