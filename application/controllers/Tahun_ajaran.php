<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_ajaran extends CI_Controller {

	public function index()
	{
		$data['dt_thn_ajar'] = $this->Tahun_ajar_model->show('tbl_thn_ajar');
		$this->template_lib->load('template','/page/tbl_tahun_ajaran',$data);
	}
	public function form_insert_thn_ajar(){
		$this->template_lib->load('template','/page/form_tahun_ajaran');
	}
	
	public function proses_insert_thn_ajar(){
		$tahun_ajar = $this->input->post('thn_ajar');
		$status     = $this->input->post('status_thn_ajar');
		$semester   = $this->input->post('semester');

		$data_thn_ajar = array('thn_ajaran'=>$tahun_ajar, 'status'=>$status, 'semester'=>$semester);

		$this->Tahun_ajar_model->insert('tbl_thn_ajar', $data_thn_ajar);

	}

	public function show_thn_ajar(){
		$data['dt_thn_ajar'] = $this->Tahun_ajar_model->show('tbl_thn_ajar');
		$this->template_lib->load('template','/page/tbl_tahun_ajaran',$data);
	}

	public function form_edit_thn_ajar(){
		$id = $this->uri->segment(3);
		$data['dt_thn_ajar'] = $this->Tahun_ajar_model->edit($id);
		$this->template_lib->load('template','/page/form_edit_thn_ajaran',$data);
	}

	public function proses_update_thn_ajar(){
		$id = $this->uri->segment(3);
		
		$tahun_ajar = $this->input->post('thn_ajar');
		$status     = $this->input->post('status_thn_ajar');
		$semester   = $this->input->post('semester');

		$data_thn_ajar = array('tahun_ajaran'=>$tahun_ajar, 'status'=>$status, 'semester'=>$semester);

		$this->Tahun_ajar_model->update($id,$data_thn_ajar);

		redirect('Tahun_ajaran');

	}

	public function proses_delete_thn_ajar(){
		$id = $this->uri->segment(3);
		$this->Tahun_ajar_model->delete($id);
		redirect('Tahun_ajaran');
	}
	
}
