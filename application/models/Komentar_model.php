<?php

class Komentar_model extends CI_Model{
    public function get(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get('komentar')->result_array();
    }
}