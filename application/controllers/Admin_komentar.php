<?php

class Admin_komentar extends CI_Controller{
    public function index(){
        $data['title'] = "Komentar";
        $data['komentar'] = $this->db->get('komentar')->result_array();
        viewAdmin('Komentar','index', $data);
    }
}