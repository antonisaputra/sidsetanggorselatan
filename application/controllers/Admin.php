<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller{
    
    public function index(){
        $data['title'] = "Admin SID Setanggor Selatan";
        $data['dusun'] = $this->db->get('dusun')->result_array();
        $this->load->view('admin/tamplates/header', $data);
        $this->load->view('admin/tamplates/sidebar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/tamplates/footer', $data);
    }
}