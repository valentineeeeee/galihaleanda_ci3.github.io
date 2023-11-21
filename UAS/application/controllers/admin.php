<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('Admin/login');
	}

	public function dashboard()
	{
		$this->load->view('Admin/header_d');
		$this->load->view('Admin/dashboard');
		$this->load->view('Admin/footer');
	}

	public function data_user()
	{
		$data['data_user'] = $this -> user_model -> get();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/data_user');
		$this->load->view('Admin/footer');
	}

	public function cek_login()
	{
		$email = $this -> input -> post ('email');
		$password = $this -> input -> post ('password');

		$cek = $this -> admin_model -> check_login($email, $password);
		if ($cek == 1) {
			$user = $this-> admin_model -> user_login ($email, $password);
			foreach ($user as $u) {
				$this -> session -> set_userdata ('admin_email', $u['email']);
				$this -> session -> set_userdata ('admin_nama', $u['nama']);
			}
			redirect('admin/dashboard');
		}
		else {
			redirect('admin/index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/index');
	}
}
