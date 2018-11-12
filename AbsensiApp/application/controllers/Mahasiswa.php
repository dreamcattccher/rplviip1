<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("mahasiswa_model");
	}

	public function index()
	{
		$this->load->view('mahasiswa_view');
	}

	public function data(){
		echo json_encode($this->mahasiswa_model
							->ambilMahasiswa()->result());
	}

	public function simpan(){
		$data = array(
			"nim" => $this->input->post("nim"),
			"nama" => $this->input->post("nama"),
			"alamat" => $this->input->post("alamat"),
			"telepon" => $this->input->post("telepon")
		);

		$status = $this->mahasiswa_model->createMahasiswa($data);

		echo json_encode(array("status" => $status > 0));
	}
}
