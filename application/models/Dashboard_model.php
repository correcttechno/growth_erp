<?php 

class Dashboard_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->model('tasks_model');
    }

    //tapsiriqlarin sayini oxuyur
    public function read_row($id){

       
    }

}

?>