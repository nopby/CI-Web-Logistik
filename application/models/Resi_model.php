<?php

class Resi_model extends CI_Model {
    public function getAllResi(){
        return $this->db->get('resi')->result_array();
    } 
    public function getResi($no){
        $query = "SELECT * FROM `resi` WHERE `kode` IN (".implode(',',array_filter($no)).")";
        return $this->db->query($query)->result_array();
    }
    public function cekResi($no){
        $query = "SELECT * FROM `resi` WHERE `kode` IN (".implode(',',array_filter($no)).")";
        if(empty($this->db->query($query)->result_array())){
            //ga ada
            return true;
        }else{
            //ada
            return false;
        }
    }
}