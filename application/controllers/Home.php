<?php

class Home extends CI_Controller{
    public function index(){
        $data['title'] = "Home";
        $data['berita'] = $this->db->get('berita')->result_array();
        viewUser('home','index', $data);
    }
}