<?php

class Profil_Desa extends CI_Controller{
    public function index(){
        $data['title'] = "Sejarah Desa";
        viewUser('profil_desa','sejarah_desa',$data);
    }

    public function profil_wilayah_desa(){
        $data['title'] = "Profil Wilayah Desa"; 
        viewUser('profil_desa','profil_wilayah_desa', $data);
    }
}