<?php

class Load_model extends CI_Model{

    public function load($templateName="dashboardView",$ar=array()){
        $this->load->view("static/headerView");
        $this->load->view("static/menuView");
        $this->load->view("static/navbarView");
        $this->load->view($templateName,$ar);
        $this->load->view("static/footerView");
    }

}