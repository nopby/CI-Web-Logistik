<?php

class Contact extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Message_model');
    }
    public function index(){
        $data['title'] = 'Contact';
        $data['login'] = false;
        $this->form_validation->set_rules('name','Nama', 'required');
        $this->form_validation->set_rules('subject','Subjek', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('message','Pesan', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('about/contact-us');
            $this->load->view('templates/footer',$data);
        }else {
            $data = [
                'name' => $this->input->post('name'),
                'subject' => $this->input->post('subject'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
            ];
            $this->Message_model->addMessage($data);
            $this->session->set_flashdata('flash','Terkirim');
            redirect('contact');
        }
    }
}