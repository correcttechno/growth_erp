<?php

class Tasks_model extends CI_Model{

    public function read(){
        $data=$this->database_model->read('tasks');
        $results=array();
        foreach($data as $d){
            if($this->user_model->userdata['status']=='admin'){
                $results[]=$d;
            }
            else{
                $users_ids=json_decode($d['users'],true);
                $answers_ids=array();
                $answers=$this->database_model->read('tasks_log',array('task_id'=>$d['id']));
                foreach($answers as $a){
                    $answers_ids[]=$a['user_id'];
                    if($a['status']=='notanswer'){
                        if($a['user_id']==$this->user_model->userdata['id']){
                        $results[]=$d;
                        }
                        break;
                    }
                }

                $f1=array_diff($users_ids, $answers_ids);
                $f2=array_diff($answers_ids, $users_ids);
                $f=array_merge($f1, $f2);
                
                if(count($f)>0 and $f[0]==$this->user_model->userdata['id']){
                    $results[]=$d;
                }
            }
        }
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

    public function delete_answer($id){
        $this->database_model->delete('tasks_log',array('id'=>$id));
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