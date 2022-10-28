<?php

class Data_desa extends CI_Controller{
    public function data_wilayah(){
        $data['title'] = "Data Wilayah Administratif";
        $data['dusun'] = $this->db->get('dusun')->result_array();
        viewUser('data_desa','data_wilayah',$data);
    }

    public function data_pendidikan_kk(){
        $data['title'] = "Data Pendidikan Dalam KK";
        $data['data'] = $this->db->get('pendidikan_kk')->result_array();
        viewUser('data_desa','pendidikan_kk', $data);
    }

    public function chart_pendidikan_KK() {
		$data = $this->db->get('pendidikan_kk')->result();
		echo json_encode($data);
	}

    public function data_pendidikan_ditempuh(){
        $data['title'] = "Data Pendidikan Di tempuh";
        $data['data'] = $this->db->get('pendidikan_ditempuh')->result_array();
        viewUser('data_desa','pendidikan_ditempuh', $data);
    }

    public function chart_pendidikan_ditempuh() {
		$data = $this->db->get('pendidikan_ditempuh')->result();
		echo json_encode($data);
	}

    public function data_pekerjaan(){
        $data['title'] = "Data Pekerjaan";
        $data['data'] = $this->db->get('pekerja')->result_array();
        viewUser('data_desa','pekerjaan', $data);
    }
    public function data_agama(){
        $data['title'] = "Data Agama";
        $data['data'] = $this->db->get('agama')->result_array();
        viewUser('data_desa','agama', $data);
    }

    public function chart_agama() {
		$data = $this->db->get('agama')->result();
		echo json_encode($data);
	}

    public function data_jenis_kelamin(){
        $data['title'] = "Data Jenis Kelamin";
        $data['data'] = $this->db->get('jenis_kelamin')->result_array();
        viewUser('data_desa','jenis_kelamin', $data);
    }

    public function chart_jenis_kelamin() {
		$data = $this->db->get('jenis_kelamin')->result();
		echo json_encode($data);
	}

    public function warga_negara(){
        $data['title'] = "Data Jenis Kelamin";
        $data['data'] = $this->db->get('warga_negara')->result_array();
        viewUser('data_desa','warga_negara', $data);
    }

    public function chart_warga_negara() {
		$data = $this->db->get('warga_negara')->result();
		echo json_encode($data);
	}
}