<?php 

class Dashboard_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->model('tasks_model');
    }

    //tapsiriqlarin sayini oxuyur
    public function read_row($user_id){
        //$year=$date[0];
        //$month=$date[1];
        //$sql="select *from reports_log where customer_id=$customer_id and (MONTH(date) = ($month) AND YEAR(date) = ($year))";

        $date=$this->input->post('date',true);
        
        $month=date('m');
        $year=date('Y');
        if($date!=''){
            $date=explode('-',$date);
            $year=$date[0];
            $month=$date[1];
        }

        $sql="select *from tasks where users like '%$user_id%' and (MONTH(date) = ($month) AND YEAR(date) = ($year))";
        $results=$this->database_model->query($sql);
        $ar= $this->tasks_model->getTasks($results);


        //musteri sayi
        $sql="select *from tasks where users like '%$user_id%' and (MONTH(date) = ($month) AND YEAR(date) = ($year)) group by customer_id";
        $clen=$this->database_model->query($sql);

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