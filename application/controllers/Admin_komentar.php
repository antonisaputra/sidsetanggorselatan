<?php

class Admin_komentar extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Komentar_model');
        is_login();
    }
    public function index(){
        $data['title'] = "Komentar";
        $data['komentar'] = $this->Komentar_model->get();
        viewAdmin('Komentar','index', $data);
    }
}