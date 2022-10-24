<?php

class Rt_model extends CI_Model{
    public function getRt(){
        $this->db->order_by('id', 'DESC');
        return  $this->db->get('detail_rt')->result_array();
    }

    public function tambahRt(){
        $data = [
            'id_dusun' => $this->input->post('dusun'),
            'RT' => $this->input->post('rt', true),
            'jumlah_KK' => $this->input->post('jumlah_kk', true),
            'jumlah_L' => $this->input->post('jumlah_l', true),
            'jumlah_P' => $this->input->post('jumlah_p', true)
        ];

        $this->db->insert('RT', $data);
    }
}