<?php

class User_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->helper('password');
        $this->load->library('session');
        $this->userdata=$this->get_userdata();
    }

    public $userdata=false;

    private function check_user($username,$password){
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

    public function set_login($username,$password){
        $user=$this->check_user($username,$password);

        if ($user) {
            $session_data = array(
                'username' => $user['email'],
                'token'    =>$user['token'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);
            return true;
        }
        else{
            return false;
        }
    }

    public function set_logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('token');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
    }

    public function get_userdata(){
        if($this->session->has_userdata("username") and $this->session->has_userdata("token") and $this->session->has_userdata("logged_in")){
            $user=$this->database_model->read_row('users',array('token'=>$this->session->userdata('token')));
            return $user;
        }
        else{
            return false;
        }
    }

    public function checkAdminLogined(){
        if($this->userdata and $this->userdata['status']=='admin'){
            return true;
        }
        else{
            $this->set_logout();
            redirect(base_url());
        }
    }

    public function checkLogined(){
        if($this->userdata){
            return true;
        }
        else{
            $this->set_logout();
            redirect(base_url());
        }
    }

    

}