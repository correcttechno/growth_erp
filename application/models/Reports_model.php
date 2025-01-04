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

}