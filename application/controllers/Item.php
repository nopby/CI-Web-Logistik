<?php

class Item extends CI_Controller {
    private $data = ['title', 'cek','login', 'resi'];
    public function __construct(){
        parent::__construct();
        $this->load->model('Item_model');
        $this->data['title'] = 'Cek Resi';
        $this->data['login'] = true;
        $this->data['resi'] = $this->Resi_model->getAllResi();
    }
    public function index(){
        $this->loadView();
    }
    public function loadView(){
        $this->load->view('templates/header',$this->data); 
        $this->load->view('admin/item',$this->data);
        $this->load->view('templates/footer',$this->data);
    }
}