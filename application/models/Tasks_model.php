<?php

class Tasks_model extends CI_Model
{

    public function read($start=0,$limit=100)
    {
       
        $filter='';
        if(isset($_GET['f'])){
            $filter=$_GET['f'];
        }

       // echo $filter;die;

        $results = array();
        if ($this->user_model->userdata['status'] == 'admin') {
            $results = $this->database_model->read('tasks',array('id!='=>0),array('id','desc'),$limit,$start);
        }
        else{
            $my_id=$this->user_model->userdata['id'];
            $results=$this->db->query("SELECT 
                t.*
            FROM 
                tasks t
            LEFT JOIN 
                tasks_log tl
            ON 
                t.id = tl.id
            WHERE creator_id=$my_id or users like '%$my_id%'
            ORDER BY 
                CASE 
                    WHEN tl.id IS NULL THEN 0 
                    ELSE 1 
                END, 
                CASE 
                    WHEN tl.id IS NULL THEN -t.id 
                    ELSE t.id   
                END
            LIMIT $start,$limit;
            ")->result_array();
        }
      
        if($filter!='' and $filter!='all'){
            
            $filterAr=array();
            foreach($results as $r){
                $tasks_log=$this->database_model->read_row('tasks_log',array('task_id'=>$r['id']),array('status','asc'));
                
                switch($filter){
                    case 'ongoing':
                        if(count($tasks_log)<=0){
                            $filterAr[]=$r;
                        }
                        break;
                    case 'success':
                        if(count($tasks_log) and $tasks_log['status']=='answered'){
                            $filterAr[]=$r;
                        }
                        break;
                    case 'error':
                        if(count($tasks_log) and $tasks_log['status']=='notanswer'){
                            $filterAr[]=$r;
                        }
                        break;
                }
            }
            $results=$filterAr;
        }
        
        return count($results) > 0 ? $results : false;
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
}
