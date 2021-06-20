<?php

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Profile_model');
    }
    public function index(){
        $data['title'] = "Beranda";
        $data['login'] = true;
        $page = 'index';
        $data['profile'] = $this->Profile_model->getBySession();
        $this->loadView($data,$page);
    }
    public function profile(){
        $data['title'] = "Profile";
        $data['login'] = true;
        $page = 'profile';
        $data['profile'] = $this->db->get_where('profile',
        ['username' => $this->session->userdata('username')])->row_array();
        $this->loadView($data,$page);
    }
    public function loadView($data,$page){
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('user/'.$page,$data);
        $this->load->view('templates/footer',$data);
    }

    public function editProfile(){

        $data = [
            'fullname' => $this->input->post('fullname'),
            'image' => $_FILES['image']['name'],
            'gender' => $this->input->post('gender'),
            'religion' => $this->input->post('religion'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone')
        ];
        $now = array_filter($data);
        if(array_filter($now)==NULL){
            redirect('user/profile');
        }else{
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allow_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_file'] = './assets/img/Profile/';
                $this->load->library('upload',$config);
                

                if($this->upload->do_upload('image')){
                    var_dump($this->upload->data());die;
                    $new_image = $this->upload->data('file_name');
                    $now['image'] = $new_image;
                    
                }else{
                    echo $this->upload->display_errors();
                }
            }
            $this->db->where('username',$this->session->userdata('username'));
            $this->db->update('profile',$now);
            
        }
        redirect('user/profile');
        
    }
}