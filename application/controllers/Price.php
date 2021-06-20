<?php

class Price extends CI_Controller {
    public function index() {
        $data['title'] = 'Price';
        $data['login'] = false;
        $this->load->view('templates/header',$data);
        $this->load->view('price/pricing');
        $this->load->view('templates/footer',$data);
    }
}