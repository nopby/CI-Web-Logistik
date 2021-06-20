<?php

class Item_model extends CI_Model {
    public function getItemMasuk(){
        $query = "SELECT `barang_masuk`.*,`layanan`.`layanan`
        FROM `barang_masuk` JOIN `layanan` 
        WHERE `barang_masuk`.`id_layanan` = `layanan`.`id`";
        return $this->db->query($query)->result_array();
    }
    public function getItemKeluar(){
        $query = "SELECT `barang_keluar`.*,`layanan`.`layanan`
        FROM `barang_keluar` JOIN `layanan` 
        WHERE `barang_keluar`.`id_layanan` = `layanan`.`id`";
        return $this->db->query($query)->result_array();
    }
    public function addItemMasuk($data){
        $this->db->insert('barang_masuk',$data);
    }

    public function updateItemMasuk($id,$menu){
        $this->db->where('id',$id);
        $this->db->update('barang_masuk',$menu);
    }

    public function deleteItemMasuk($id){
        $this->db->delete('barang_masuk',['id' => $id]);
    }

    public function itemMasukKeluar($data){
        $this->db->insert('barang_keluar',$data);
    }
    public function cek($id){
        $query = "SELECT `id` FROM `barang_keluar` WHERE `id`= $id";
        $cek = $this->db->query($query)->row_array();
        if(empty($cek)){
            //kosong
            return false;
        }else{
            //ada
            return true;
        }
    }
    public function deleteItemKeluar($id){
        $this->db->where('id',$id);
        $this->db->delete('barang_keluar');
    }
    public function updateItemKeluar($id,$data){
        $this->db->where('id',$id);
        $this->db->update('barang_keluar',$data);
    }
    
}