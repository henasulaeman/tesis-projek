<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// public function __construct(){
	// 	parent::__construct();
	// 	if(!$this->Auth_model->current_user()){
	// 		redirect('login');
	// 	}
	// }
	public function index()
	{
		$data['test'] = "test";
		$this->template_lib->load('template','/page/home',$data);
	}
}
