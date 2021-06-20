<?php

class News_model extends CI_Model {
    public function getAllNews(){
        $this->db->order_by('id','desc');
        return $this->db->get('news')->result_array();
    }
    public function getNewsById($id){
        $this->db->where('id',$id);
        return $this->db->get('news')->row_array();
    }
}