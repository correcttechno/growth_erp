<?php

class Modal_model extends CI_Model{

    public function delete($url){
        $this->load->view("static/deletemodalView",array('url'=>$url));
    }

}