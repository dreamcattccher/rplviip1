<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("islogin")){
			redirect("login");
		}
		$this->load->model("jadwal_model");
	}

	public function index()
	{
		$data["mahasiswa"] = $this->jadwal_model
				->ambilMahasiswa()->result();
		$data["matakuliah"] = $this->jadwal_model
				->ambilMatakuliah()->result();
		$this->load->view('jadwal_view',$data);
	}

	public function ambiljadwal($jurusan,$sesi){
		echo json_encode(
				$this->jadwal_model
					->ambilJadwalkelas($jurusan,$sesi)->result());
	}

	public function kelasMahasiswa($idkelas){
		echo json_encode($this->jadwal_model
			->ambilMahasiswaKelas($idkelas)->result());
	}

	public function kelasMatakuliah($idkelas){
		echo json_encode($this->jadwal_model
			->ambilMatakuliahKelas($idkelas)->result());
	}

	public function hapusKelasMahasiswa($idkelas,$nim){
		$berhasil = $this->jadwal_model
					->hapusMahasiswaKelas($idkelas,$nim);

		echo json_encode(array(
			"status" => $berhasil
		));
	}

	public function hapusKelasMatakuliah($idkelas,$idmatakuliah){
		$berhasil = $this->jadwal_model
					->hapusMatakuliahKelas($idkelas,$idmatakuliah);

		echo json_encode(array(
			"status" => $berhasil
		));
	}

	public function simpanKelasMahasiswa(){
		$mahasiswa = $this->input->post("mahasiswa");
		$idkelas = $this->input->post("idkelas");

		foreach($mahasiswa as $nim):
			$this->jadwal_model
				->simpanMahasiswaKelas(array(
					"idkelas" => $idkelas,
					"nim" => $nim
				));
		endforeach;

		echo json_encode(
			array("status" => TRUE)
		);
	}

	public function simpanKelasMatakuliah(){
		$matakuliah = $this->input->post("matakuliah");
		$idkelas = $this->input->post("idkelas");

		foreach($matakuliah as $idmatakuliah):
			$this->jadwal_model
				->simpanMatakuliahKelas(array(
					"idkelas" => $idkelas,
					"idmatakuliah" => $idmatakuliah
				));
		endforeach;

		echo json_encode(
			array("status" => TRUE)
		);
	}
}
