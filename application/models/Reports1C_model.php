<?php

class Reports1C_model extends CI_Model{

    public function read(){
        $results=$this->database_model->read('reports1c');
        return count($results)>0?$results:false;
    }

    public function delete($id){
        $this->database_model->delete('reports1c',array('id'=>$id));
        return true;
    }

    public function add($data,$ch_id=0){
        if(!empty($ch_id)){
            $this->database_model->update("reports1c",$data,array('id'=>$ch_id));
        }
        else{
            $this->database_model->insert("reports1c",$data);    
        }
        
        return true;
    }

    public function read_row($id){
        $result=$this->database_model->read_row('reports1c',array('id'=>$id));
        return count($result)>0?$result:false;
    }

    public function add_log($id,$customer_id){
        $nowmonth=date("m");
        //MONTH(eklenme_tarihi) = MONTH(NOW()) AND YEAR(eklenme_tarihi) = YEAR(NOW());
        $sql="select *from reports1c_log where customer_id=$customer_id and (MONTH(date) = MONTH(NOW()) AND YEAR(date) = YEAR(NOW()))";
        //echo $sql;die;
        $check=$this->database_model->query_row($sql);
        $reports=array();
        if(count($check)>0){
            $reports=json_decode($check['reports'],true);
        }
        
        if(!in_array($id,$reports)){
            $user_id=$this->user_model->userdata['id'];
            $reports[$user_id.'-'.rand(11,999)]=$id;
        }
        else{
            $index=array_search($id,$reports);
            if(strstr($index,$this->user_model->userdata['id'])){
                unset($reports[$index]);
            }
            else{
                return false;
            }
        }
        
        $reports=json_encode($reports);
    
        if(count($check)>0){
            $this->database_model->update("reports1c_log",array('reports'=>$reports),array('id'=>$check['id']));
        }
        else{
            $this->database_model->insert('reports1c_log',array('customer_id'=>$customer_id,'reports'=>$reports));
        }
        
        return true;
        
    }

    public function read_log($customer_id){
        $sql="";
        $date=$this->input->get("date");
        if(empty($date)){
            $sql="select *from reports1c_log where customer_id=$customer_id and (MONTH(date) = MONTH(NOW()) AND YEAR(date) = YEAR(NOW()))";
        }
        else{
            $date=explode('-',$date);

            $year=$date[0];
            $month=$date[1];
            $sql="select *from reports1c_log where customer_id=$customer_id and (MONTH(date) = ($month) AND YEAR(date) = ($year))";
        }
        //echo $sql;die;
        $result=$this->database_model->query_row($sql);
        return count($result)>0?$result:false;
    }

    public function read_logs($customer_id){
        $sql="select *from reports1c_log where customer_id=$customer_id order by id desc";
        //echo $sql;die;
        $result=$this->database_model->query($sql);
        return count($result)>0?$result:false;
    }

}