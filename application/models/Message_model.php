<?php

class Message_model extends CI_Model {
    public function addMessage($data){
        $this->db->insert('message',$data);
    }
    public function getAllMessage(){
        return $this->db->get('message')->result_array();
    }

    public function deleteMessage($id){
        $this->db->delete('message',['id'=>$id]);
    }
}