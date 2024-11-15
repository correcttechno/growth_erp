<?php

class Departments_model extends CI_Model{

    public function read(){
        $results=$this->database_model->read('departments');
        return count($results)>0?$results:false;
    }

    public function delete($id){
        $this->database_model->delete('departments',array('id'=>$id));
        return true;
    }

    public function add($data,$ch_id=0){
        if(!empty($ch_id)){
            $this->database_model->update("departments",$data,array('id'=>$ch_id));
        }
        else{
            $this->database_model->insert("departments",$data);    
        }
        
        return true;
    }

    public function read_row($id){
        $result=$this->database_model->read_row('departments',array('id'=>$id));
        return count($result)>0?$result:false;
    }

}