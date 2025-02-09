<?php 

class Dashboard_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->model('tasks_model');
    }

    //tapsiriqlarin sayini oxuyur
    public function read_row($user_id){
        //and (MONTH(date) = ($month) AND YEAR(date) = ($year))
        
        $this->db->like('users',$user_id,'both');
        $results=$this->db->get('tasks')->result_array();
        $ar= $this->tasks_model->getTasks($results);


        //musteri sayi
        $this->db->like('users',$user_id,'both');
        $this->db->group_by('customer_id');
        $clen=$this->db->get('tasks')->result_array();

        $res=array(
            'ongoing'       =>count($ar['ongoing']),
            'complete'      =>count($ar['complete']),
            'incomplete'    =>count($ar['incomplete']),
            'customers'     =>count($clen),
        );
        return $res;
    }

}

?>