<?php

class Berita_model extends CI_Model{
    public function getBerita(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get('berita')->result_array();
    }

    public function tambah(){
        $config['upload_path'] = FCPATH . '/assets/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            redirect('Berita');
        } else {
            $gambar = $this->upload->data('file_name');
            $data = [
                'gambar' => $gambar,
                'judul' => $this->input->post('judul', true),
                'deskripsi' => $this->input->post('deskripsi')
            ];

            $this->db->insert('berita', $data);
        }
    }

    public function edit($id){
        $config['upload_path'] = FCPATH . '/assets/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $gambar_lama = $this->input->post('gambar_lama');
            $data = [
                'gambar' => $gambar_lama,
                'judul' => $this->input->post('judul', true),
                'deskripsi' => $this->input->post('deskripsi')
            ];

            $this->db->insert('berita', $data);
        } else {
            $gambar = $this->upload->data('file_name');
            $gambar_lama = $this->input->post('gambar_lama');

            unlink(FCPATH. 'assets/upload/'.$gambar_lama);

            $data = [
                'gambar' => $gambar,
                'judul' => $this->input->post('judul', true),
                'deskripsi' => $this->input->post('deskripsi')
            ];

            $this->db->where('id', $id);
            $this->db->update('berita', $data);
        }
    }

    public function deleteBerita($id){
        $this->db->where('id', $id);
        $this->db->delete('berita');
    }
}