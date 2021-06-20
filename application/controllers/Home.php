<?php

class Home extends CI_Controller {
    public function index() {
        $data['title'] = 'Home';
        $data['login'] = false;

        if($this->session->userdata('username')){
            redirect('user');
        }else{
            $this->load->view('templates/header',$data);
            $this->load->view('home/index');
            $this->load->view('templates/footer',$data);
        }
    }
}