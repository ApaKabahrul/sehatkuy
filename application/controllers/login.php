<?php

class Login extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
	}

	public function agadmigin(){
		$this->load->view('crud/login');
		$this->load->view('footer');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username' => $username,
					   'password' => $password);
		$cek = $this->login_model->cek_login("admin",$where)->num_rows();
		if($cek>0){
			$data_session = array
			('nama' => $username,
			 'status' => "login" );

			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}
		else {
			$this->load->view('crud/Salah');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}