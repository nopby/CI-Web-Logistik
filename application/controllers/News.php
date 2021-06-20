<?php

class News extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('News_model');
    }
    public function index(){
        $data['title'] = 'News';
        $data['login'] = false;
        $data['news'] = $this->News_model->getAllNews();
        $this->load->view('templates/header',$data);
        $this->load->view('news/news-list',$data);
        $this->load->view('templates/footer',$data);
    }
    public function read($id){
        $data['title'] = 'News';
        $data['login'] = false;
        $data['news'] = $this->News_model->getNewsById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('news/read',$data);
        $this->load->view('templates/footer',$data);
    }
}