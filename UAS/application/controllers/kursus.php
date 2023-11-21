<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kursus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kursus_model');
	}

	public function index()
	{
		$data['kursus'] = $this -> kursus_model -> get();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/data_kursus');
		$this->load->view('Admin/footer');
	}

	public function input_kursus()
	{
		$this->load->view('Admin/header');
		$this->load->view('Admin/input_kursus');
		$this->load->view('Admin/footer');
	}

	public function insert()
	{
		$data = [
			'nama_kursus' => $this->input->post('nama_kursus'),
			'pengajar' => $this->input->post('pengajar'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi')
		];

		$this->kursus_model->insert($data);
		redirect('kursus/index');
	}

	public function delete($id_kursus)
	{
		$this -> kursus_model -> delete($id_kursus);
		redirect('kursus/index');
	}

	public function edit($id)
	{
		$data['kursus'] = $this->kursus_model->getById($id);
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/edit_kursus');
		$this->load->view('Admin/footer');
	}

	public function update()
	{
		$data = [
			'nama_kursus' => $this->input->post('nama_kursus'),
			'pengajar' => $this->input->post('pengajar'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi')
		];

		$id = $this->input->post('id_kursus');

		$this->kursus_model->update(['id_kursus' => $id], $data);
		redirect('kursus/index');
	}
}
