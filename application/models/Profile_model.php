<?php

class Profile_model extends CI_Model {
    public function getBySession(){
        return $this->db->get_where('profile',['username' => $this->session->userdata('username')])->row_array();
    }
    
}