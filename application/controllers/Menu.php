<?php

class Menu extends CI_Controller {
    private $data = ['title','login','profile','menu','submenu'];
    private $page = 'index';

    public function __construct(){
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->model('Profile_model');
        $this->data['title'] = "Management";
        $this->data['login'] = true;
        $this->data['profile'] = $this->Profile_model->getBySession();
        $this->data['menu'] = $this->Menu_model->getUserMenu();
        $this->data['subMenu'] = $this->Menu_model->getSubMenu();
    }

    public function index(){
        $this->loadView();
    }
    public function addMenu(){
        $this->form_validation->set_rules('menu','Menu','required');
        if($this->form_validation->run() == false){
            $this->loadView();
        }else {
            $this->Menu_model->addUserMenu($this->input->post('menu'));
            $this->session->set_flashdata('flash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        New menu added.
                    </div>');
            redirect('menu');
        }
    }
    public function delete($id){
        $this->Menu_model->deleteUserMenu($id);
        $this->session->set_flashdata('flash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Menu deleted.
                    </div>');
        redirect('menu');
    }
    public function updateMenu(){
        $this->form_validation->set_rules('upmenu','Menu','required');
        if($this->form_validation->run() == false){
            $this->loadView();
        }else {
            $id = $this->input->post('upmenuid');
            $menu = $this->input->post('upmenu');
            $this->Menu_model->updateUserMenu($id,$menu);
            $this->session->set_flashdata('flash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Menu Updated.
                    </div>');
            redirect('menu');
        }
    }
    public function loadView(){
        $this->load->view('templates/header',$this->data);
        $this->load->view('templates/sidebar',$this->data);
        $this->load->view('templates/topbar',$this->data);
        $this->load->view('menu/'.$this->page,$this->data);
        $this->load->view('templates/footer',$this->data);
    }

    public function addSubMenu(){
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('menu_id','Menu ID','required');
        $this->form_validation->set_rules('url','Url','required');
        $this->form_validation->set_rules('icon','Icon','required');

        if($this->form_validation->run() == false){
            $this->loadView();
        }else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->Menu_model->addSubMenu($data);
            $this->session->set_flashdata('subflash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        New menu added.
                    </div>');
            redirect('menu');
        }
    }
    public function deleteSubMenu($menu){
        $this->Menu_model->deleteSubMenu($menu);
        $this->session->set_flashdata('subflash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Sub Menu deleted.
                    </div>');
        redirect('menu');
    }
    public function updateSubMenu(){
        $this->form_validation->set_rules('upsubmenu_id','Menu','required');
        $this->form_validation->set_rules('upsubmenutitle','Menu','required');
        $this->form_validation->set_rules('upsubmenuurl','Menu','required');
        $this->form_validation->set_rules('upsubmenuicon','Menu','required');
        $id = $this->input->post('upsubmenuid');
        $active = $this->input->post('upsubmenuactive');
        if($active==NULL){
            $active = 0;
        }else{
            $active = 1;
        }
        if($this->form_validation->run() == false){
            $this->loadView();
        }else {
            $data = [
                'menu_id' => $this->input->post('upsubmenu_id'),
                'title' => $this->input->post('upsubmenutitle'),
                'url' => $this->input->post('upsubmenuurl'),
                'icon' => $this->input->post('upsubmenuicon'),
                'is_active' => $active
            ];
            $this->Menu_model->updateSubMenu($id,$data);
            $this->session->set_flashdata('subflash','
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Sub Menu Updated.
                    </div>');
            redirect('menu');
        }
    }
}