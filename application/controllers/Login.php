<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model("user_model");
    }

    public function index(){
        $this->load->view("loginView");
    }

    public function submit() {
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        $response=array(
            "message"=>'',
        );

        if ($this->form_validation->run() == FALSE) {
            $response['message']="Zəhmət olmasa xanaları doldurun !";
            $this->load->view('loginView',$response);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
           

			$user=$this->user_model->check_user($username,$password);

            if ($user) {
                $session_data = array(
                    'username' => $user['username'],
                    'token'    =>$user['token'],
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'dashboard');
            } else {
                $response['message']="Hesab tapılmadı !";
                $this->load->view("loginView",$response);
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('token');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
