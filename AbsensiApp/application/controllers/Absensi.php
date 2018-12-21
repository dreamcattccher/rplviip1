<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("islogin")){
			redirect("login");
		}
		$this->load->model("absensi_model");
	}

	public function index()
	{
		$this->load->view("absensi_view",array(
			"kelas" => $this->absensi_model->ambilKelas()->result()
		));
	}
	
	public function matakuliah($idkelas){
		echo json_encode($this->absensi_model
			->ambilMatakuliah($idkelas)->result());
	}

	public function get($idkelas,$idmatakuliah){
		echo json_encode($this->absensi_model
			->ambilabsensi($idkelas,$idmatakuliah)->result());
	}

	public function getdetail($idkelas,$idmatakuliah,$pertemuan){
		echo json_encode($this->absensi_model
			->ambilabsensidetail($idkelas,$idmatakuliah,$pertemuan)
			->result());
	}

	public function update(){
		$data = $this->input->post("data");
		$result = [];
		foreach($data as $absensi):
			array_push($result,$absensi[0]->name);
		endforeach;

		echo json_encode($result);
	}
}
