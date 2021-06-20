<?php

class Resi extends CI_Controller {
    private $data = ['title', 'cek','login', 'resi'];
    public function __construct(){
        parent::__construct();
        $this->load->model('Resi_model');
        $this->data['title'] = 'Cek Resi';
        $this->data['cek'] = false;
        $this->data['login'] = false;
        $this->data['resi'] = $this->Resi_model->getAllResi();
    }
    public function index(){
        $this->loadView();
    }
    public function cek(){
        $this->data['cek'] = true;
        $this->data['login'] = false;
        $resi = $this->input->post('resi');
        if(empty(array_filter($resi))){
            $this->session->set_flashdata('flash','
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Setidaknya isi.
                </div>');
            redirect('resi');
        }else{
            if($this->Resi_model->cekResi($resi)){
                $this->session->set_flashdata('flash','
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    No tidak ada.
                </div>');
                redirect('resi');
            }else{
                $this->data['resi'] = $this->Resi_model->getResi($resi);
                $this->loadView();
            }
        }
        

    }
    public function loadView(){
        $this->load->view('templates/header',$this->data); 
        $this->load->view('resi/resi',$this->data);
        $this->load->view('templates/footer',$this->data);
    }
}