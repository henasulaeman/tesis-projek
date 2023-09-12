<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Program_studi extends CI_Controller {

	public function index()
	{
		$data['dt_prodi'] = $this->Prodi_model->show('tbl_program_studi');
		$this->template_lib->load('template','/page/tbl_prodi',$data);
	}
	public function form_insert_prodi(){
		$this->template_lib->load('template','/page/form_prodi');
	}
	
	public function proses_insert_prodi(){
		$kode_prodi = $this->input->post('kode_prodi');
		$nama_prodi = $this->input->post('nm_prodi');
		$status     = $this->input->post('status_prodi');
		$date_post  = date('Y-m-d H:i:s');

		$data_prodi = array('kode_prodi'=>$kode_prodi, 'nama_prodi'=>$nama_prodi, 'status_prodi'=>$status,'datepost'=>$date_post);

		$this->Prodi_model->insert('tbl_program_studi', $data_prodi);
		redirect('Program_studi');

	}

	public function show_prodi(){
		$data['dt_prodi'] = $this->Prodi_model->show('tbl_program_studi');
		$this->template_lib->load('template','/page/tbl_prodi',$data);
	}

	public function form_edit_prodi(){
		$id = $this->uri->segment(3);
		$data['dt_prodi'] = $this->Prodi_model->edit($id);
		$this->template_lib->load('template','/page/form_edit_prodi',$data);
	}

	public function proses_update_prodi(){
		$id = $this->uri->segment(3);
		
		$kode_prodi = $this->input->post('kode_prodi');
		$nama_prodi = $this->input->post('nm_prodi');
		$status     = $this->input->post('status_prodi');
		$date_post  = date('Y-m-d H:i:s');

		$data_prodi = array('kode_prodi'=>$kode_prodi, 'nama_prodi'=>$nama_prodi, 'status_prodi'=>$status,'datepost'=>$date_post);

		$this->Prodi_model->update($id,$data_prodi);

		redirect('Program_studi');

	}

	public function proses_delete_prodi(){
		$id = $this->uri->segment(3);
		$this->Prodi_model->delete($id);
		redirect('Program_studi');
	}
	
}
