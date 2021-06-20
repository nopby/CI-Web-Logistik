<?php

class Admin extends CI_Controller {
    private $data = ['title', 'login', 'item_masuk','item_keluar','profile','message','news','read','users','detailUser','cari'];
    public function __construct(){
        parent::__construct();
        $this->load->model('Profile_model');
        $this->load->model('Item_model');
        $this->load->model('Message_model');
        $this->load->model('News_model');
        $this->load->model('Users_model');
        $this->dataItem();
    }
    public function index(){
        $this->data['title'] = 'Dashboard';
        $this->loadView('index',$this->data);
    }
    public function dataItem(){
        $this->data['login'] = true;
        $this->data['read'] = false;
        $this->data['title'] = 'Barang';
        $this->data['profile'] = $this->Profile_model->getBySession();
        $this->data['item_masuk'] = $this->Item_model->getItemMasuk();
        $this->data['item_keluar'] = $this->Item_model->getItemKeluar();
    }
    public function item(){
        $this->loadView('item',$this->data);
    }
    public function newItemMasuk(){
        $this->form_validation->set_rules('layanan','Layanan','required');
        $this->form_validation->set_rules('pengirim','Pengirim','required');
        $this->form_validation->set_rules('penerima','Penerima','required');
        $this->form_validation->set_rules('asal','Asal','required');
        $this->form_validation->set_rules('tujuan','Tujuan','required');
        $this->form_validation->set_rules('berat','Berat','required|numeric');
        $this->form_validation->set_rules('ukuran','Ukuran','required');
        $harga = $this->input->post('total');
        $data = [
            'id_layanan' => $this->input->post('layanan'),
            'pengirim' => $this->input->post('pengirim'),
            'penerima' => $this->input->post('penerima'),
            'asal' => $this->input->post('asal'),
            'tujuan' => $this->input->post('tujuan'),
            'berat' => $this->input->post('berat'),
            'ukuran' => $this->input->post('ukuran'),
        ];
        
        if($this->form_validation->run() == false){
            $this->loadView('item',$this->data);
        }else {
            $this->Item_model->addItemMasuk($data);
            $this->session->set_flashdata('flash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        New item added.
                    </div>');
            redirect('admin/item');
        }
    }

    public function updateItemMasuk(){
        $this->form_validation->set_rules('upmlayanan','Layanan','required');
        $this->form_validation->set_rules('upmpengirim','Pengirim','required');
        $this->form_validation->set_rules('upmpenerima','Penerima','required');
        $this->form_validation->set_rules('upmasal','Asal','required');
        $this->form_validation->set_rules('upmtujuan','Tujuan','required');
        $this->form_validation->set_rules('upmberat','Berat','required|numeric');
        $this->form_validation->set_rules('upmukuran','Ukuran','required');
        if($this->form_validation->run() == false){
            $this->loadView('item',$this->data);
        }else {
            $data = [
                'id_layanan' => $this->input->post('upmlayanan'),
                'pengirim' => $this->input->post('upmpengirim'),
                'penerima' => $this->input->post('upmpenerima'),
                'asal' => $this->input->post('upmasal'),
                'tujuan' => $this->input->post('upmtujuan'),
                'berat' => $this->input->post('upmberat'),
                'ukuran' => $this->input->post('upmukuran')
            ];
            $id = $this->input->post('upmid');
            $this->Item_model->updateItemMasuk($id,$data);
            $this->session->set_flashdata('flash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Item Updated.
                    </div>');
            redirect('admin/item');
        }
    }


    public function deleteItemMasuk($id){
        $this->Item_model->deleteItemMasuk($id);
        $this->session->set_flashdata('flash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Item deleted.
                    </div>');
        redirect('admin/item');
    }


    public function itemMasukKeluar(){
        $this->form_validation->set_rules('mkno_kurir','No Kurir','required');
        $data = [
            'id' => $this->input->post('mkid'),
            'id_layanan' => $this->input->post('mklayanan'),
            'pengirim' => $this->input->post('mkpengirim'),
            'penerima' => $this->input->post('mkpenerima'),
            'asal' => $this->input->post('mkasal'),
            'tujuan' => $this->input->post('mktujuan'),
            'berat' => $this->input->post('mkberat'),
            'no_kurir' => $this->input->post('mkno_kurir'),
            'tgl_keluar' => NULL
        ];
        $id = $this->input->post('mkid');
        if($this->form_validation->run()==false){
            $this->loadView('item',$this->data);
        }else{
            if($this->Item_model->cek($id)==false){
                $this->Item_model->itemMasukKeluar($data);
                $this->session->set_flashdata('flash','
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Item Moved successfully
                        </div>');
                redirect('admin/item');
            }else{
                $this->session->set_flashdata('flash','
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Item exist in Barang Keluar
                    </div>');
                redirect('admin/item');
            }
        }
        
    }

    public function deleteItemKeluar($id){
        $this->Item_model->deleteItemKeluar($id);
        $this->session->set_flashdata('flash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Item deleted.
                    </div>');
        redirect('admin/item');
    }

    public function updateItemKeluar(){
        $this->dataItem();
        $this->data['title'] = 'Barang';
        $this->form_validation->set_rules('upkno_kurir','No Kurir','required');
        if($this->form_validation->run() == false){
            $this->loadView('item',$this->data);
        }else {
            $data = [
                'no_kurir' => $this->input->post('upkno_kurir'),
            ];
            $id = $this->input->post('upkid');
            $this->Item_model->updateItemKeluar($id,$data);
            $this->session->set_flashdata('flash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Item Updated.
                    </div>');
            redirect('admin/item');
        }
    }


    public function user(){
        $this->data['title'] = 'User';
        $this->data['users'] = $this->Users_model->getAllUser();
        $this->loadView('user',$this->data);
    }

    public function deleteUser($id){
        $this->Users_model->deleteUser($id);
        redirect('admin/user');
    }

    public function nonactiveUser($id){
        $this->Users_model->nonactiveUser($id);
        redirect('admin/user');
    }

    public function activateUser($id){
        $this->Users_model->activateUser($id);
        redirect('admin/user');
    }

    public function detailUser($id){
        $this->data['title'] = 'Detail User';
        $this->data['detailUser'] = $this->Users_model->detailUser($id);
        $this->loadView('detailUser',$this->data);
    }

    
    public function cariUser(){
        $this->data['title'] = 'User';
        $submit = $this->input->post('keyword');
        if(isset($submit)){
            $this->data['users'] = $this->Users_model->cariUser($submit);
            $this->loadView('user',$this->data);
        }else{
            redirect('admin/user');
        }
    }

    public function message(){
        $this->data['title'] = 'Pesan';
        $this->data['message'] = $this->Message_model->getAllMessage();
        $this->loadView('message',$this->data);
    }
    

    public function deleteMessage($id){
        $this->Message_model->deleteMessage($id);
        redirect('admin/message');
    }


    public function news(){
        $this->data['title'] = 'News';
        $this->data['news'] = $this->News_model->getAllNews();
        $this->loadView('news',$this->data);
    }

    public function read($id){
        $this->data['title'] = 'News';
        $this->data['read']=true;
        $this->loadView($id,$this->data);
    }


    public function loadView($page,$data){
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        if($this->data['read']){
            $this->load->view('admin/'.$page);
        }else{
            $this->load->view('admin/'.$page);
        }
        $this->load->view('templates/footer',$data);
    }
}