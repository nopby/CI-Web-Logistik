<?php

class Ongkir_model extends CI_model {
    public function getOngkir(){
        $query = "
        SELECT `ongkir`.*,`layanan`.`layanan`,`ongkir`.`berat`*`layanan`.`harga` as `total`
        FROM `ongkir` JOIN `layanan` 
        ON `ongkir`.`id_layanan` = `layanan`.`id`
        ";
        return $this->db->query($query)->result_array();
    }
    public function setOngkir($data){
        $this->db->insert('ongkir',$data);
    }
    public function deleteOngkir($id){
        $this->db->delete('ongkir',['id_layanan' => $id]);
    }
}