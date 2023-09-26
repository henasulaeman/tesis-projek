<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class Dosen extends CI_Controller {


	public function index()
	{
		$data['dt_dosen'] = $this->Dosen_model->show('tbl_dosen');
		$this->template_lib->load('template','/page/tbl_dosen',$data);
	}

	public function form_insert_dosen(){
		$data['dt_dosen'] = $this->Dosen_model->show('tbl_dosen');
		$this->template_lib->load('template','/page/form_dosen',$data);
	}

	public function proses_insert_dosen(){
		$kode_dosen   = $this->input->post('kode_dosen');
		$nama_dosen  = $this->input->post('nama_dosen');
		$email_dosen    = $this->input->post('email_dosen');
		$alamat_dosen    = $this->input->post('alamat_dosen');
		$tahun_masuk    = $this->input->post('tahun_masuk');
		$status_dosen = $this->input->post('status_dosen');
		$date_post     = date('Y-m-d H:i:s');

		$data_dosen = array('kd_dosen'=>$kode_dosen, 'nama_dosen'=>$nama_dosen, 'email_dosen'=>$email_dosen,'alamat_dosen'=>$alamat_dosen,'tahun_masuk'=>$tahun_masuk,'status_keaktifan'=>$status_dosen,'datepost'=>$date_post);

		$this->Dosen_model->insert('tbl_dosen', $data_dosen);
		redirect('Dosen');


	}
	public function form_edit_dosen(){
		$id = $this->uri->segment(3);
		$data['dt_dosen'] = $this->Dosen_model->edit($id);
		//$data['dt_prodi'] = $this->Prodi_model->show('tbl_program_studi');
		$this->template_lib->load('template','/page/form_edit_dosen',$data);
	}

	public function proses_update_dosen(){
		$id = $this->uri->segment(3);
		$kode_dosen     = $this->input->post('kode_dosen');
		$nama_dosen     = $this->input->post('nama_dosen');
		$email_dosen    = $this->input->post('email_dosen');
		$alamat_dosen   = $this->input->post('alamat_dosen');
		$tahun_masuk    = $this->input->post('tahun_masuk');
		$status_dosen   = $this->input->post('status_dosen');
		$date_post      = date('Y-m-d H:i:s');

		$data_dosen = array('kd_dosen'=>$kode_dosen, 'nama_dosen'=>$nama_dosen, 'email_dosen'=>$email_dosen,'alamat_dosen'=>$alamat_dosen,'tahun_masuk'=>$tahun_masuk,'status_keaktifan'=>$status_dosen,'datepost'=>$date_post);

		$this->Dosen_model->update($id,$data_dosen);
		
		redirect('Dosen');


	}

	public function proses_delete_dosen(){
		$id = $this->uri->segment(3);
		$this->Dosen_model->delete($id);
		redirect('Dosen');
	}
}