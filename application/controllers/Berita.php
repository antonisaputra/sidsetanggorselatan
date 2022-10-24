<?php

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $data['title'] = "Admin Berita";
        $data['berita'] = $this->Berita_model->getBerita();
        viewAdmin('Berita', 'index', $data);
    }

    public function tambahBerita()
    {
        $data['title'] = "Admin Berita Tambah";
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if ($this->form_validation->run() == false) {
            viewAdmin('Berita', 'tambah', $data);
        } else {
            $this->Berita_model->tambah();
            $this->session->set_flashdata('alert', 'alert-success');
            $this->session->set_flashdata('pesan', 'Data Berita Berhasil Di Tambah');
            redirect('Berita');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Admin Berita Edit";
        $data['berita'] = $this->db->get('berita')->row_array();
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if ($this->form_validation->run() == false) {
            viewAdmin('Berita', 'edit', $data);
        } else {
            $this->Berita_model->edit($id);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Berita Berhasil Di Ubah');
            redirect('Berita');
        }
    }

    public function delete($id)
    {
        $this->Berita_model->deleteBerita($id);
        $this->session->set_flashdata('alert', 'alert-danger');
        $this->session->set_flashdata('pesan', 'Data Berita Berhasil Di Hapus');
        redirect('Berita');
    }
}
