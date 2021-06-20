<?php

class Menu_model extends CI_Model {
    
    public function getUserMenu(){
        return $this->db->get('user_menu')->result_array();
    }

    public function addUserMenu($menu){
        $this->db->insert('user_menu',['menu'=>$menu]);
    }
    public function deleteUserMenu($id){
        $this->db->where('id',$id);
        $this->db->delete('user_menu');
    }

    public function updateUserMenu($id,$menu){
        $this->db->where('id',$id);
        $this->db->update('user_menu',['menu' => $menu]);
    }

    public function getSubMenu(){
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
    public function addSubMenu($data){
        $this->db->insert('user_sub_menu',$data);
    }

    public function deleteSubMenu($id){
        $this->db->where('id',$id);
        $this->db->delete('user_sub_menu');
    }

    public function updateSubMenu($id,$data){
        $this->db->where('id',$id);
        $this->db->update('user_sub_menu',$data);
    }
    
}