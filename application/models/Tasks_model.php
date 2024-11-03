<?php

class Tasks_model extends CI_Model{

    public function read(){
        $results=$this->database_model->read('tasks');
        return count($results)>0?$results:false;
    }

    public function delete($id){
        $this->database_model->delete('tasks',array('id'=>$id));
        return true;
    }

    public function add($data,$ch_id=0){
        if(!empty($ch_id)){
            $this->database_model->update("tasks",$data,array('id'=>$ch_id));
        }
        else{
            $this->database_model->insert("tasks",$data);    
        }
        
        return true;
    }

    public function read_row($id){
        $result=$this->database_model->read_row('tasks',array('id'=>$id));
        return count($result)>0?$result:false;
    }

}