<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Documents extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->user_model->checkLogined();
    }


    public function index(){
      
       $this->load_model->load('documentsView');
    }
}