<?php

class User_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->helper('password');
    }

    public function check_user($username,$password){
        $password=generate_password($password);
       
        $user=$this->database_model->read_row('users',array('email'=>$username,'password'=>$password));
        if(count($user)>0){
            $token=generate_token();
            $this->database_model->update('users',array('token'=>$token),array('id'=>$user['id']));
            $user['token']=$token;
            return $user;
        }
        else{
            return false;
        }
    }

}