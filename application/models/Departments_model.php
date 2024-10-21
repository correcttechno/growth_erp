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

}