<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dusun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dusun_model');
    }
    public function index()
    {
        $data['title'] = "Admin Dusun";
        $data['dusun'] = $this->Dusun_model->getDusun();
        viewAdmin('Dusun', 'index', $data);
    }

    public function tambahDusun()
    {
        $data['title'] = "Admin Tambah Dusun";
        $this->form_validation->set_rules('nama_dusun', 'Nama Dusun', 'required|trim');
        $this->form_validation->set_rules('jumlah_kk', 'Jumalah KK', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_l', 'Jumalah Laki-Laki', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_p', 'Jumalah Perempuan', 'required|trim|numeric');
        if ($this->form_validation->run() == false) {
            viewAdmin('Dusun', 'tambah', $data);
        } else {
            $this->Dusun_model->tambahDusun();
            $this->session->set_flashdata('alert', 'alert-success');
            $this->session->set_flashdata('pesan', 'Data Dusun Berhasil Di Tambah');
            redirect('Dusun');
        }
    }
    public function edit($id)
    {
        $data['title'] = "Admin Edit Dusun";
        $data['dusun'] = $this->db->get_where('dusun', ['id' => $id])->row_array();
        $this->form_validation->set_rules('nama_dusun', 'Nama Dusun', 'required|trim');
        $this->form_validation->set_rules('jumlah_kk', 'Jumalah KK', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_l', 'Jumalah Laki-Laki', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_p', 'Jumalah Perempuan', 'required|trim|numeric');
        if ($this->form_validation->run() == false) {
            viewAdmin('Dusun', 'edit', $data);
        } else {
            $this->Dusun_model->editDusun($id);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Dusun Berhasil Di Edit');
            redirect('Dusun');
        }
    }

    public function hapus($id)
    {
        $this->Dusun_model->hapusDusun($id);
        $this->session->set_flashdata('alert', 'alert-danger');
        $this->session->set_flashdata('pesan', 'Data Dusun Berhasil Di Hapus');
        redirect('Dusun');
    }
}
