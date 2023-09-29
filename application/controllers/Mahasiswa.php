<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class Mahasiswa extends CI_Controller {


	public function index()
	{
		$data['dt_mahasiswa'] = $this->Mahasiswa_model->show('tbl_mahasiswa');
		$this->template_lib->load('template','/page/tbl_mahasiswa',$data);
	}

	public function form_insert_mahasiswa(){
		$data['dt_mahasiswa'] = $this->Dosen_model->show('tbl_mahasiswa');
		$data['dt_prodi'] = $this->Prodi_model->show('tbl_program_studi');
		$this->template_lib->load('template','/page/form_mahasiswa',$data);
	}

	public function proses_insert_mahasiswa(){
		$npm         = $this->input->post('npm');
		$nama_mhs    = $this->input->post('nama_mhs');
		$email_mhs   = $this->input->post('email_mhs');
		$alamat_mhs  = $this->input->post('alamat_mhs');
		$asal_SMA    = $this->input->post('asal_SMA');
		$lulus_SMA	 = $this->input->post('tahun_lulus_SMA');
		$kode_prodi	 = $this->input->post('kode_prodi');
		$status_mhs	 = $this->input->post('status_mhs');
		$date_post   = date('Y-m-d H:i:s');

		$data_mahasiswa = array('npm'=>$npm, 'nama_mhs'=>$nama_mhs, 'email_mhs'=>$email_mhs,'alamat_mhs'=>$alamat_mhs,'asal_SMA'=>$asal_SMA,'tahun_lulus_SMA'=>$lulus_SMA,'kode_prodi'=>$kode_prodi,'status_mhs'=>$status_mhs,'datepost'=>$date_post);

		$this->Mahasiswa_model->insert('tbl_mahasiswa', $data_mahasiswa);
		redirect('Mahasiswa');


	}

	public function form_edit_mahasiswa(){
		$id = $this->uri->segment(3);
		$data['dt_mahasiswa'] = $this->Mahasiswa_model->edit($id);
		$data['dt_prodi'] = $this->Prodi_model->show('tbl_program_studi');
		$this->template_lib->load('template','/page/form_edit_mahasiswa',$data);
	}

	public function proses_update_mahasiswa(){
		$id = $this->uri->segment(3);
		$npm         = $this->input->post('npm');
		$nama_mhs    = $this->input->post('nama_mhs');
		$email_mhs   = $this->input->post('email_mhs');
		$alamat_mhs  = $this->input->post('alamat_mhs');
		$asal_SMA    = $this->input->post('asal_SMA');
		$lulus_SMA	 = $this->input->post('tahun_lulus_SMA');
		$kode_prodi	 = $this->input->post('kode_prodi');
		$status_mhs	 = $this->input->post('status_mhs');
		$date_post   = date('Y-m-d H:i:s');

		$data_mahasiswa = array('npm'=>$npm, 'nama_mhs'=>$nama_mhs, 'email_mhs'=>$email_mhs,'alamat_mhs'=>$alamat_mhs,'asal_SMA'=>$asal_SMA,'tahun_lulus_SMA'=>$lulus_SMA,'kode_prodi'=>$kode_prodi,'status_mhs'=>$status_mhs,'datepost'=>$date_post);

		$this->Mahasiswa_model->update($id,$data_mahasiswa);
		
		redirect('Mahasiswa');


	}

	public function proses_delete_mahasiswa(){
		$id = $this->uri->segment(3);
		$this->Mahasiswa_model->delete($id);
		redirect('Mahasiswa');
	}


}