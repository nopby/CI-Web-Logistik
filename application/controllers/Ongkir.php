<?php

class Ongkir extends CI_Controller {
    private $data = ['detail_ongkir'];
    public function __construct(){
        parent::__construct();
        $this->load->model('Ongkir_model');
        
    }
    public function index(){
        $data['title'] = 'Cek Ongkir';
        $data['login'] = false;
        $data['cek'] = false;
        $data['detail_ongkir'] = $this->Ongkir_model->getOngkir();
        $this->load->view('templates/header',$data);
        $this->load->view('ongkir/ongkir',$data);
        $this->load->view('templates/footer',$data);
    }
    public function cek(){
        for($i=1; $i<=6; $i++){
            $this->Ongkir_model->deleteOngkir($i);
        }
        $this->form_validation->set_rules('asal','Asal','required');
        $this->form_validation->set_rules('tujuan','Tujuan','required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('length','Panjang','required');
        $this->form_validation->set_rules('width','Lebar','required');
        $this->form_validation->set_rules('height','Tinggi','required');
        if($this->form_validation->run() == false){
            $data['cek'] = false;
            $data['title'] = 'Cek Ongkir';
            $data['login'] = false;
            $this->load->view('templates/header',$data);
            $this->load->view('ongkir/ongkir',$data);
            $this->load->view('templates/footer',$data);
        }else{
            for($i=1; $i<=6; $i++){
                $data = [
                    'id_layanan' => $i,
                    'asal' => $this->input->post('asal'),
                    'tujuan' => $this->input->post('tujuan'),
                    'berat' => $this->input->post('berat')
                ];
                $this->Ongkir_model->setOngkir($data);
            }
            $data['detail_ongkir'] = $this->Ongkir_model->getOngkir();
            $data['cek'] = true;
            $data['title'] = 'Cek Ongkir';
            $data['login'] = false;
            $this->load->view('templates/header',$data);
            $this->load->view('ongkir/ongkir',$data);
            $this->load->view('templates/footer',$data);
        }
        
    }
}