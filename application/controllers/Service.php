<?php

class Service extends CI_Controller {
    public function index(){
        $data['title'] = 'Services';
        $data['login'] = false;
        $this->load->view('templates/header',$data);
        $this->load->view('services/service-list');
        $this->load->view('templates/footer',$data);
    }

}