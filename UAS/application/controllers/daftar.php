<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
	}

	public function index()
	{
		$data['daftar'] = $this -> daftar_model -> get();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/data_daftar');
		$this->load->view('Admin/footer');
	}

	public function ganti_status($id)
	{
		$data['daftar'] = $this-> daftar_model->getById($id);
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/ganti_status');
		$this->load->view('Admin/footer');
	}

	public function ubah_status()
	{
		$data = [
			'status' => $this->input->post('status')
		];

		$id = $this->input->post('id_daftar');

		$this->daftar_model->update(['id_daftar' => $id], $data);
		redirect('daftar/index');
	}

}
