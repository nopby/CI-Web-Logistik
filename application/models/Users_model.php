<?php

class Users_model extends CI_Model {


    public function getAllUser(){
        $query = "SELECT `profile`.*, `users`.`level`, `users`.`is_active` FROM `profile` JOIN `users` ON `users`.`id` = `profile`.`id`";
        return $this->db->query($query)->result_array();
    }
    
    public function addUser(){
        $data = [
            'username' => htmlspecialchars($this->input->post('username',true)),
            'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT),
            'email' => htmlspecialchars($this->input->post('email',true)),
            'level' => 2,
            'created_at' => NULL,
            'is_active' => 1
        ];
        $this->db->insert('users',$data);

        $data = [
            'id' => $this->db->insert_id(),
            'username' => $data['username'],
            'image' => 'Default.jpg',
            'fullname' => $data['username'],
            'gender' => NULL,
            'religion' => NULL,
            'address' => NULL,
            'email' => $data['email'],
            'phone' => NULL
        ];
        $this->db->insert('profile',$data);
    }

    public function deleteUser($id){
        $this->db->delete('users',['id'=>$id]);
    }

    public function nonactiveUser($id){
        $this->db->where('id',$id);
        $this->db->update('users',['is_active' => 0]);
    }

    public function activateUser($id){
        $this->db->where('id',$id);
        $this->db->update('users',['is_active' => 1]);
    }

    public function detailUser($id){
        return $this->db->get_where('profile',['id' =>$id])->row_array();
    }

    public function cariUser($data){
        $query = "SELECT `profile`.*, `users`.`level`, `users`.`is_active` FROM `profile` JOIN `users` ON `users`.`id` = `profile`.`id`
        WHERE `users`.`id` LIKE '%$data%' OR `users`.`username` LIKE '%$data%' OR `users`.`email` LIKE '%$data%' OR `users`.`is_active` LIKE '%$data%'";
        return $this->db->query($query)->result_array();
    }

}