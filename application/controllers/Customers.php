<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('customers_model');
        $this->load->model("departments_model");
        $this->load->model("reports_model");
        $this->load->model("reports1c_model");        
    }

    public function index(){
        $this->user_model->checkAdminLogined();
        $results=$this->customers_model->read();
        $this->load_model->load('customersView',array('results'=>$results));
    }

    public function add(){
        $this->user_model->checkAdminLogined();
        $company        =$this->input->post('company',true);
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

        $anumber        =$this->input->post('anumber',true);
        $aid            =$this->input->post('aid',true);
        $apin1          =$this->input->post('apin1',true);
        $apin2          =$this->input->post('apin2',true);
        $skod           =$this->input->post('skod',true);
        $spass          =$this->input->post('spass',true);
        $vkod           =$this->input->post('vkod',true);
        $vpass          =$this->input->post('vpass',true);
        $vparol         =$this->input->post('vparol',true);
        
        $tasks          =$this->input->post('reports',true);
        $reports1c      =$this->input->post('reports1c',true);
      


        $id             =$this->input->post('id',true);

        $response=array(
            'msg'       =>'',
            'status'    =>false,
        );

        if(!empty($firstname) and !empty($lastname) and !empty($customertype)){
            $ar=array(
                "company"       => $company,
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
                "customertype"  =>$customertype,
                "anumber"       =>$anumber,
                "aid"           =>$aid,
                "apin1"         =>$apin1,
                "apin2"         =>$apin2,
                "skod"          =>$skod,
                "spass"         =>$spass,
                "vkod"          =>$vkod,
                "vpass"         =>$vpass,
                "vparol"        =>$vparol,
                "reports"       =>json_encode($tasks),
                "reports1c"     =>json_encode($reports1c),
            );


            $this->customers_model->add($ar,$id);
            $response['status']=true;
        }
        else{
            $response['msg']="Zəhmət olmasa * -lu xanaları doldurun !";
        }
        echo json_encode($response);
    }

    public function delete(){
        $this->user_model->checkAdminLogined();
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

    ///musteriye aid her sey
    public function view_details($customer_id){

        $this->load->model("departments_model");
        $this->load->model("reports_model");

        $departments=array();
        if($this->user_model->userdata['status'] == 'admin'){
            $departments    =$this->departments_model->read();
        }
        else{
            $departments[]=$this->departments_model->read_row($this->user_model->userdata['department_id']);
        }
        $customers      =$this->customers_model->read();

        $result=$this->customers_model->read_row($customer_id);
        $this->load_model->load('customerdetailsView',array('result'=>$result,'departments'=>$departments));
    }

}