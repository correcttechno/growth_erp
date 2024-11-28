<?php

class Employees_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function read(){
        $results=$this->database_model->read('users',array('status!='=>'admin'));
        return count($results)>0?$results:false;
    }

    public function delete($id){
        $this->database_model->delete('users',array('id'=>$id));
        return true;
    }

    public function add($data,$ch_id=0){
        if(!empty($ch_id)){
            if($data['password']==""){
                unset($data['password']);
            }
            $this->database_model->update("users",$data,array('id'=>$ch_id));
        }
        else{
            $this->database_model->insert("users",$data);    
        }
        
        return true;
    }

    public function read_row($id){
        $result=$this->database_model->read_row('users',array('id'=>$id));
        return count($result)>0?$result:false;
    }

    public function check_email($email){
        $result=$this->database_model->read_row('users',array('email'=>$email));
        return count($result)>0?true:false;
    }




}