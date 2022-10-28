<?php

class Admin_data_desa extends CI_Controller{
    public function pendidikan_KK(){
        $data['title'] = "Pendidikan Dalam KK";
        $data['data'] = $this->db->get('pendidikan_kk')->result_array();
        viewAdmin('Data_desa','pendidikan_kk',$data);
        is_login();
    }

    public function edit_pendidikan_kk($id){
        $data['title'] = "Pendidikan Dalam KK";
        $data['data'] =$this->db->get_where('pendidikan_kk',['id' => $id])->row_array();
        $this->form_validation->set_rules('jumlah','Jumlah','required|trim');
        if($this->form_validation->run() == false){
            viewAdmin('Data_desa','edit_pendidikan_kk', $data);
        }else{
            $jumlah = $this->input->post('jumlah');
            $this->db->where('id',$id);
            $this->db->update('pendidikan_kk',['jumlah' => $jumlah]);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Pendidikan Dalam KK Berhasil Di Ubah');
            redirect('Admin_data_desa/pendidikan_KK');
        }
    }

    public function pendidikan_ditempuh(){
        $data['title'] = "Pendidikan Di Tempuh";
        $data['data'] = $this->db->get('pendidikan_ditempuh')->result_array();
        viewAdmin('Data_desa','pendidikan_ditempuh',$data);
    }

    public function edit_pendidikan_ditempuh($id){
        $data['title'] = "Pendidikan Di Tempuh";
        $data['data'] =$this->db->get_where('pendidikan_ditempuh',['id' => $id])->row_array();
        $this->form_validation->set_rules('jumlah','Jumlah','required|trim');
        if($this->form_validation->run() == false){
            viewAdmin('Data_desa','edit_pendidikan_ditempuh', $data);
        }else{
            $jumlah = $this->input->post('jumlah');
            $this->db->where('id',$id);
            $this->db->update('pendidikan_ditempuh',['jumlah' => $jumlah]);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Pendidikan Ditempuh Berhasil Di Ubah');
            redirect('Admin_data_desa/pendidikan_ditempuh');
        }
    }

    public function pekerjaan(){
        $data['title'] = "Pendidikan Di Tempuh";
        $data['data'] = $this->db->get('pekerja')->result_array();
        viewAdmin('Data_desa','pekerja',$data);
    }

    public function edit_pekerjaan($id){
        $data['title'] = "Pendidikan Di Tempuh";
        $data['data'] =$this->db->get_where('pekerja',['id' => $id])->row_array();
        $this->form_validation->set_rules('jumlah','Jumlah','required|trim');
        if($this->form_validation->run() == false){
            viewAdmin('Data_desa','edit_pekerjaan', $data);
        }else{
            $jumlah = $this->input->post('jumlah');
            $this->db->where('id',$id);
            $this->db->update('pekerja',['jumlah' => $jumlah]);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Pekerja Berhasil Di Ubah');
            redirect('Admin_data_desa/pekerjaan');
        }
    }

    public function agama(){
        $data['title'] = "Pendidikan Di Tempuh";
        $data['data'] = $this->db->get('agama')->result_array();
        viewAdmin('Data_desa','agama',$data);
    }

    public function edit_agama($id){
        $data['title'] = "Agama";
        $data['data'] =$this->db->get_where('pekerja',['id' => $id])->row_array();
        $this->form_validation->set_rules('jumlah','Jumlah','required|trim');
        if($this->form_validation->run() == false){
            viewAdmin('Data_desa','edit_agama', $data);
        }else{
            $jumlah = $this->input->post('jumlah');
            $this->db->where('id',$id);
            $this->db->update('agama',['jumlah' => $jumlah]);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Agama Berhasil Di Ubah');
            redirect('Admin_data_desa/agama');
        }
    }

    public function jenis_kelamin(){
        $data['title'] = "Pendidikan Di Tempuh";
        $data['data'] = $this->db->get('jenis_kelamin')->result_array();
        viewAdmin('Data_desa','jenis_kelamin',$data);
    }
    
    public function edit_jenis_kelamin($id){
        $data['title'] = "Jenis Kelamin";
        $data['data'] =$this->db->get_where('jenis_kelamin',['id' => $id])->row_array();
        $this->form_validation->set_rules('jumlah','Jumlah','required|trim');
        if($this->form_validation->run() == false){
            viewAdmin('Data_desa','edit_jenis_kelamin', $data);
        }else{
            $jumlah = $this->input->post('jumlah');
            $this->db->where('id',$id);
            $this->db->update('jenis_kelamin',['jumlah' => $jumlah]);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Jenis Kelamin Berhasil Di Ubah');
            redirect('Admin_data_desa/jenis_kelamin');
        }
    }

    public function warga_negara(){
        $data['title'] = "Pendidikan Di Tempuh";
        $data['data'] = $this->db->get('warga_negara')->result_array();
        viewAdmin('Data_desa','warga_negara',$data);
    }

    public function edit_warga_negara($id){
        $data['title'] = "Jenis Kelamin";
        $data['data'] =$this->db->get_where('warga_negara',['id' => $id])->row_array();
        $this->form_validation->set_rules('jumlah','Jumlah','required|trim');
        if($this->form_validation->run() == false){
            viewAdmin('Data_desa','edit_warga_negara', $data);
        }else{
            $jumlah = $this->input->post('jumlah');
            $this->db->where('id',$id);
            $this->db->update('warga_negara',['jumlah' => $jumlah]);
            $this->session->set_flashdata('alert', 'alert-warning');
            $this->session->set_flashdata('pesan', 'Data Warga Negara Berhasil Di Ubah');
            redirect('Admin_data_desa/warga_negara');
        }
    }
    
}