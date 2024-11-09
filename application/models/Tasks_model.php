<?php

class Tasks_model extends CI_Model{

    public function read(){
        $results=$this->database_model->read('tasks');
        return count($results)>0?$results:false;
    }

    public function check_user_task_status($task_id,$user_id){
        $result=$this->database_model->read_row("tasks_log",array('task_id'=>$task_id,'user_id'=>$user_id));
        return count($result)>0?$result:false;
    }

    public function delete($id){
        $this->database_model->delete('tasks',array('id'=>$id));
        return true;
    }

    public function add($data,$ch_id=0){
        if(!empty($ch_id)){
            unset($data['creator_id']);
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

    public function add_answer($ar){
        $check=$this->database_model->read_row('tasks_log',array('task_id'=>$ar['task_id'],'user_id'=>$ar['user_id']));
        if(count($check)>0){
            $this->database_model->update('tasks_log',$ar,array('id'=>$check['id']));
        }
        else{
            $this->database_model->insert('tasks_log',$ar);
        }
    }

}