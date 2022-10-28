<?php

class Pemerintah_desa extends CI_Controller{
    public function index(){
        $data['title'] = "Visi Dan Misi";
        viewUser('pemerintah_desa', 'index', $data);
    }

    public function visi_misi(){
        $data['title'] = "Visi Dan Misi";
        viewUser('pemerintah_desa', 'visi_misi', $data);
    }
}