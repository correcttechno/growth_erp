<?php

class Reports_model extends CI_Model{

    public function read($dep_id=0){
        $results=array();
        if($dep_id!=0){
            $results=$this->database_model->read('reports',array('department_id'=>$dep_id));
        }
        else{
            $results=$this->database_model->read('reports');
        }
        return count($results)>0?$results:false;
    }

    public function delete($id){
        $this->database_model->delete('reports',array('id'=>$id));
        return true;
    }

    public function add($data,$ch_id=0){
        if(!empty($ch_id)){
            $this->database_model->update("reports",$data,array('id'=>$ch_id));
        }
        else{
            $this->database_model->insert("reports",$data);    
        }
        
        return true;
    }

    public function read_row($id){
        $result=$this->database_model->read_row('reports',array('id'=>$id));
        return count($result)>0?$result:false;
    }

    public function add_log($id,$customer_id){
        $check=$this->database_model->read_row("reports_log",array('customer_id'=>$customer_id));
        $reports=array();
        if(count($check)>0){
            $reports=json_decode($check['reports'],true);
        }

        if(!in_array($id,$reports)){
            $reports[]=$id;
        }
        else{
            $index=array_search($id,$reports);
            unset($reports[$index]);
        }
        $reports=json_encode($reports);
        if(count($check)>0){
            $this->database_model->update("reports_log",array('reports'=>$reports),array('id'=>$check['id']));
        }
        else{
            $this->database_model->insert('reports_log',array('customer_id'=>$customer_id,'reports'=>$reports));
        }
        
        return true;
        
    }

    public function read_log($customer_id){
        $result=$this->database_model->read_row('reports_log',array('customer_id'=>$customer_id));
        return count($result)>0?$result:false;
    }

}