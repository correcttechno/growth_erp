<?php

class Users extends CI_Controller{
    public function index(){
        $this->load_model->load("usersView");
    }
}