<?php

class Dusun_model extends CI_Model{
    public function getDusun(){
        $this->db->order_by('id','DESC');
        return $this->db->get('dusun')->result_array();
    }

    public function tambahDusun(){
        $data = [
            'nama_dusun' => $this->input->post('nama_dusun', true),
            'jumlah_KK' => $this->input->post('jumlah_kk', true),
            'jumlah_L' => $this->input->post('jumlah_l', true),
            'jumlah_P' => $this->input->post('jumlah_p',true)
        ];

        $this->db->insert('dusun', $data);
    }

    public function editDusun($id){
        $data = [
            'nama_dusun' => $this->input->post('nama_dusun', true),
            'jumlah_KK' => $this->input->post('jumlah_kk', true),
            'jumlah_L' => $this->input->post('jumlah_l', true),
            'jumlah_P' => $this->input->post('jumlah_p',true)
        ];

        $this->db->where('id', $id);
        $this->db->update('dusun', $data);
    }

    public function hapusDusun($id){
        $this->db->where('id', $id);
        $this->db->delete('dusun');
    }
}