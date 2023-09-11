<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function login(){
		$this->load->library('form_validation');
		
		$rules = $this->Auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run()==FALSE){
			return $this->load->view('page/form_login');
		}
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));


		if($this->Auth_model->login($username,$password)){
			redirect('Home');
		}else{
			 $this->session->set_flashdata('message_login_error','Login gagal, Pastikan Username dan password anda benar !');
				
		}
		//echo "test";
		$this->load->view('page/form_login');

		//echo "test";
		//echo $username.$password;

	}

	public function logout(){

		$this->Auth_model->logout();
		redirect(site_url());
	}
}
