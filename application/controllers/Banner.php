<?php

class Banner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Banner_model');
        is_login();
    }
    public function index()
    {
        $data['title'] = "Banner";
        $data['banner'] = $this->db->get('banner')->result_array();
        viewAdmin('Banner', 'index', $data);
    }

    public function tambahBanner()
    {
        $data['title'] = "Admin Tambah Banner";
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if ($this->form_validation->run() == false) {
            viewAdmin('Banner', 'tambah', $data);
        } else {
            $this->Banner_model->tambah();
            $this->session->set_flashdata('alert', 'alert-success');
            $this->session->set_flashdata('pesan', 'Data Banner Berhasil Di Tambah');
            redirect('Banner');
        }
    }

    public function editBanner($id)
    {
        $data['title'] = "Admin Berita Edit";
        $data['banner'] = $this->db->get('banner')->row_array();
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if ($this->form_validation->run() == false) {
            viewAdmin('Banner', 'edit', $data);
        } else {
            $this->Banner_model->edit($id);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Banner Berhasil Di Ubah');
            redirect('Banner');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('banner');
        $this->session->set_flashdata('alert', 'alert-warning');
        $this->session->set_flashdata('pesan', 'Data Banner Berhasil Di Hapus');
        redirect('Banner');
    }
}
