<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// show_404();
		$this->load->view('page/form-login');
	}

	public function login(){
		$this->load->library('form_validation');
		
		$rules = $this->Auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run()==FALSE){
			return $this->load->view('page/form-login');
		}
		$username = $this->input->post('username');
		$password = $this->input->post('password');


		if($this->Auth_model->login($username,$password)){
			redirect('Home');
		}else{
			$this->session->set_flashdata('message_login_error','Login gagal, Pastikan Usernam dan password anda benar !');
		}

		$this->load->view('page/form-login');

		//echo "test";
		//echo $username.$password;

	}

	public function logout(){

		$this->Auth_model->logout();
		redirect(site_url());
	}
}
