<?php

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Users_model');
        
    }
    public function index(){
        $data['title'] = 'Login';
        $data['login'] = false;
        $page = 'login';
        if($this->session->userdata('username')){
            redirect('user');
        }else{
            $this->loadView($data,$page);
        }
    }
    public function loadView($data,$page){
        $this->load->view('templates/header',$data);
        $this->load->view('form/'.$page);
        $this->load->view('templates/footer',$data);
    }
    public function login(){
        $data['title'] = 'Login';
        $this->form_validation->set_rules('username','Username', 'required|trim|min_length[5]');
        $this->form_validation->set_rules('password','Password', 'required|min_length[5]');
        if($this->form_validation->run() == false){
            $this->index();
        }else {
            $this->doLogin();
        }
    }
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Anda berhasil log out </div>');
        redirect('auth');
    }
    public function register(){
        $data['title'] = 'Registration';
        $page = 'registration';
        $data['login'] = false;
        if($this->session->userdata('username')){
            redirect('user');
        }else{
            $this->loadView($data,$page);
        }
    }
    public function registration(){
        $data['title'] = 'Registration';
        $page = 'registration';
        $data['login'] = false;
        $this->form_validation->set_rules('username','Username', 'required|trim|is_unique[users.username]|min_length[5]');
        $this->form_validation->set_rules('password','Password', 'required|min_length[5]');
        $this->form_validation->set_rules('cpassword','Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('email','Email', 'required|valid_email|trim|is_unique[users.email]');
        if($this->form_validation->run() == false){
            $this->loadView($data,$page);
        }else {
            $this->Users_model->addUser();
            $this->session->set_flashdata('flash','
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Anda berhasil terdaftar 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>');
            redirect('auth/register');
        }
    }
    private function doLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users',['username' => $username])->row_array();
        
        //cek user
        if($user){
            //cek activation
            if($user['is_active'] == 1){
                //cek password
                if(password_verify($password, $user['password'])){
                    $data = [
                        'username' => $user['username'],
                        'level'    => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    //cek level
                    if($user['level'] == 1){
                        $data['url'] = 'admin';
                        $this->session->set_userdata($data);
                        redirect($data['url']);
                    }else {
                        $data['url'] = 'user';
                        $this->session->set_userdata($data);
                        redirect($data['url']);
                    }
                    
                }else{
                    $this->session->set_flashdata('flash','
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Password yang anda masukkan salah.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('auth');
                }
                
            }else{
                $this->session->set_flashdata('flash','
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Email belum diaktivasi. 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>');
                redirect('auth');
            }
        }else{
            $this->session->set_flashdata('flash','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                User belum terdaftar.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth');
        }
    }
}