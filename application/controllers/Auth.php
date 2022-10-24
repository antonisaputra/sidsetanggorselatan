<?php

class Auth extends CI_Controller{
    public function index(){

        $data['title'] = "Login";
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run() == false){
            $this->load->view('Auth/login', $data);
        }else{
            $this->_login();
        }
    }

    private function _login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',['username' => $username])->row_array();

        if($user){
            if(password_verify($password, $user['password'])){
                $data = [
                    'username' => $user['username'],                    
                ];

                $this->session->set_userdata($data);

                redirect('Admin');
            }else{
                $this->session->set_flashdata('alert','alert-danger');
            $this->session->set_flashdata('pesan','Password And Salah!');
            redirect('Auth');
            }
        }else{
            $this->session->set_flashdata('alert','alert-danger');
            $this->session->set_flashdata('pesan','Username Anda Salah!');
            redirect('Auth');
        }
    }

    public function registrasi(){
        $data = [
            'username' => 'setanggorselatan',
            'password' => password_hash('admin123', PASSWORD_DEFAULT)
        ];

        $this->db->insert('user',$data);
    }

    public function logout(){
        $this->session->unset_userdata('usename');
        redirect('Auth');
    }
}