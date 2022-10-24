<?php

class Pendidikan_model extends CI_Model{
    public function getPendidikan(){
        $this->db->order_by('id','DESC');
        return $this->db->get('pendidikan_kk')->result_array();
    }

    public function tambahPendidikan($data){
        $this->db->insert('pendidikan_kk', $data);
    }
}