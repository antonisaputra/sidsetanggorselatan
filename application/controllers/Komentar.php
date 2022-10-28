<?php

class Komentar extends CI_Controller{
    public function tambahKomentar(){
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap', true),
            'email' => $this->input->post('email', true),
            'komentar' => $this->input->post('komentar', true),
        ];
        $this->db->insert('komentar', $data);

        redirect('Home');
    }
}