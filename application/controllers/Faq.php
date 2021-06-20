<?php

class Faq extends CI_Controller {
    public function index() {
        $data['title'] = 'FAQ';
        $data['login'] = false;
        $this->load->view('templates/header',$data);
        $this->load->view('about/faq');
        $this->load->view('templates/footer',$data);
    }
}