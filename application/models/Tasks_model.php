<?php

class Tasks_model extends CI_Model
{

    public function getTasks($results){
        $incomplete     =array();
        $complete       =array();
        $ongoing        =array();

        foreach($results as $r){
            $logs=$this->readTaskLogs($r['id']);
            $userIDS=json_decode($r['users'],true);
            if($logs){
                for($i=0;$i<count($logs);$i++){
                    if($logs[$i]['status']=='notanswer'){
                        $incomplete[]=$r;
                        break;
                    }
                    else if(($i+1)==count($userIDS)){
                        $complete[]=$r;
                    }
                    else if(($i+1)==count($logs) and ($i+1)!=count($userIDS)){
                        $ongoing[]=$r;
                    }
                }
            }
            else{
                $ongoing[]=$r;
            }
        }

        return array('ongoing'=>$ongoing,'complete'=>$complete,'incomplete'=>$incomplete);
    }

    public function read($start=0,$limit=100)
    {
        $results = array();
        if ($this->user_model->userdata['status'] == 'admin') {
            $results = $this->database_model->read('tasks',array('id!='=>0),array('id','desc'),$limit,$start);
        }
        else{
            $my_id=$this->user_model->userdata['id'];
            $this->db->like('users',$my_id,'both');
            $results = $this->db->get("tasks")->result_array();
        }
        
        return $this->getTasks($results);
    }

    //bu funksya tasklarin ardicil islemesi ucun idi hazirda isletmirem
    public function get_task_progress($d)
    {
        $users_ids = json_decode($d['users'], true);
        $answers_ids = array();
        $answers = $this->database_model->read('tasks_log', array('task_id' => $d['id']));
        foreach ($answers as $a) {
            $answers_ids[] = $a['user_id'];
            if (true) {
                if ($a['user_id'] == $this->user_model->userdata['id']) {
                    $results[] = $d;
                }
                return true;
                break;
            }
        }
        return false;

    }

    //bu funksya taski icra eden ucun buttonun vezyetin gosterir
    public function get_answer_button($list){
        $l=json_decode($list,true);
        return in_array($this->user_model->userdata['id'],$l);
    }

    public function check_user_task_status($task_id, $user_id)
    {
        $result = $this->database_model->read_row("tasks_log", array('task_id' => $task_id, 'user_id' => $user_id));
        return count($result) > 0 ? $result : false;
    }

    public function delete($id)
    {
        $this->database_model->delete('tasks', array('id' => $id));
        return true;
    }

    public function delete_answer($id)
    {
        $this->database_model->delete('tasks_log', array('id' => $id));
        return true;
    }

    public function add($data, $ch_id = 0)
    {
        if (!empty($ch_id)) {
            unset($data['creator_id']);
            $this->database_model->update("tasks", $data, array('id' => $ch_id));
        } else {
            $this->database_model->insert("tasks", $data);
        }

        return true;
    }

    public function read_row($id)
    {
        $result = $this->database_model->read_row('tasks', array('id' => $id));
        return count($result) > 0 ? $result : false;
    }

    public function add_answer($ar)
    {
        $check = $this->database_model->read_row('tasks_log', array('task_id' => $ar['task_id'], 'user_id' => $ar['user_id']));
        if (count($check) > 0) {
            $this->database_model->update('tasks_log', $ar, array('id' => $check['id']));
        } else {
            $this->database_model->insert('tasks_log', $ar);
        }
    }


    public function readTaskLogs($task_id)
    {
        $results = $this->database_model->read("tasks_log", array('task_id' => $task_id));
        return count($results) > 0 ? $results : false;
    }
}
