<?php

class Regulasi extends CI_Controller{
    public function index(){
        $data['title'] = "Informasi Public";
        viewUser('regulasi','informasi_publik', $data);
    }
}