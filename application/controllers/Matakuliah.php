<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class Matakuliah extends CI_Controller {


	public function index()
	{
		$data['dt_matkul'] = $this->Matakuliah_model->show('tbl_matakuliah');
		$this->template_lib->load('template','/page/tbl_matkul',$data);
	}
	public function form_insert_matkul(){
		$data['dt_prodi'] = $this->Prodi_model->show('tbl_program_studi');
		$this->template_lib->load('template','/page/form_matkul',$data);
	}

	public function proses_insert_matkul(){
		$kode_matkul   = $this->input->post('kode_matkul');
		$nama_matkul   = $this->input->post('nama_matkul');
		$kode_prodi    = $this->input->post('kode_prodi');
		$status_matkul = $this->input->post('status_matkul');
		$date_post     = date('Y-m-d H:i:s');

		$data_matkul = array('kode_matkul'=>$kode_matkul, 'nama_matkul'=>$nama_matkul, 'kode_prodi'=>$kode_prodi,'status_matkul'=>$status_matkul,'datepost'=>$date_post);

		$this->Tahun_ajar_model->insert('tbl_matakuliah', $data_matkul);
		redirect('Matakuliah');

	}

	public function form_edit_matkul(){
		$id = $this->uri->segment(3);
		$data['dt_matkul'] = $this->Prodi_model->edit($id);
		$data['dt_prodi'] = $this->Prodi_model->show('tbl_program_studi');
		$this->template_lib->load('template','/page/form_edit_matkul',$data);
	}


}