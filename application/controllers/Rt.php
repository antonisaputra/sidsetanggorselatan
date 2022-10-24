<?php

class Rt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rt_model');
    }

    public function index()
    {
        $data['title'] = "Admin Rt";
        $data['rt'] = $this->Rt_model->getRt('');
        viewAdmin('Rt', 'index', $data);
    }

    public function tambahRt()
    {
        $data['title'] = "Admin Tambah RT";
        $this->form_validation->set_rules('dusun', 'Nama Dusun', 'required|trim');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim');
        $this->form_validation->set_rules('jumlah_kk', 'Jumalah KK', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_l', 'Jumalah Laki-Laki', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_p', 'Jumalah Perempuan', 'required|trim|numeric');
        if ($this->form_validation->run() == false) {
            viewAdmin('Rt', 'tambah', $data);
        } else {
            $this->Rt_model->tambahRt();
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data RT Berhasil Di Tambah');
            redirect('Rt');
        }
    }

    public function editRt($id)
    {
        $data['title'] = "Admin Tambah RT";
        $data['dusun'] = $this->db->get('dusun')->result_array();
        $data['rt'] = $this->db->get_where('RT', ['id' => $id])->row_array();
        $this->form_validation->set_rules('dusun', 'Nama Dusun', 'required|trim');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim');
        $this->form_validation->set_rules('jumlah_kk', 'Jumalah KK', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_l', 'Jumalah Laki-Laki', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_p', 'Jumalah Perempuan', 'required|trim|numeric');
        if ($this->form_validation->run() == false) {
            viewAdmin('Rt', 'edit', $data);
        } else {
            $this->Rt_model->editRt();
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data RT Berhasil Di Tambah');
            redirect('Rt');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('RT');
        $this->session->set_flashdata('alert', 'alert-danger');
        $this->session->set_flashdata('pesan', 'Data RT Berhasil Di Di Hapus');
        redirect('Rt');
    }
}
