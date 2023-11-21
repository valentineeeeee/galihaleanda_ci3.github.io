<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('kursus_model');
		$this->load->model('daftar_model');
	}

	public function index()
	{
		$this->load->view('User/header');
		$this->load->view('User/home');
		$this->load->view('User/footer');
	}

    public function tentang()
	{
		$this->load->view('User/header');
		$this->load->view('User/tentang');
		$this->load->view('User/footer');
	}

	public function kursus()
	{
		$this->load->view('User/header');
		$this->load->view('User/kursus');
		$this->load->view('User/footer');
	}

	public function detail_kursus($id)
	{
		$data['detail'] = $this->kursus_model->getById($id);
		$this->load->view('User/header', $data);
		$this->load->view('User/detail_kursus');
		$this->load->view('User/footer');
	}

	public function login()
	{
		$this->load->view('User/login');
	}

	public function register()
	{
		$this->load->view('User/register');
	}

	public function daftar()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'tgl_daftar' => date('Y/m/d'),
			'password' => $this->input->post('password')
		];

		$this->session->set_userdata('nama',$this->input->post('nama'));
		$this->session->set_userdata('email',$this->input->post('email'));

		$this->user_model->register($data);
		redirect('user/index');
	}

	public function checking()
	{
		$email = $this -> input -> post ('email');
		$password = $this -> input -> post ('password');

		$cek = $this -> user_model -> check_login($email, $password);
		if ($cek == 1) {
			$user = $this-> user_model -> user_login ($email, $password);
			foreach ($user as $u) {
				$this -> session -> set_userdata ('user_email', $u['email']);
				$this -> session -> set_userdata ('user_nama', $u['nama']);
			}
			redirect('user/index');
		}
		else {
			redirect('user/login');
		}
	}

	public function pendaftaran()
	{
		$data['daftar'] = $this->daftar_model->getByUser($this->session->userdata('user_email'));
		$this->load->view('User/header', $data);
		$this->load->view('User/pendaftaran');
		$this->load->view('User/footer');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user/login');
	}

	public function daftar_kursus($id_kursus)
	{
		$ambil_id = $this->user_model->getId($this->session->userdata('user_email'));
		foreach ($ambil_id as $a) {
			$id = $a['id_user'];
		}

		$data = [
			'id_kursus' => $id_kursus,
			'id_user' => $id,
			'tanggal' => date('Y/m/d'),
			'status' => "Belum Bayar"
		];

		$this->daftar_model->insert($data);
		redirect('user/pendaftaran');
	}
}
