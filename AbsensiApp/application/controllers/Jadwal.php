<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("jadwal_model");
	}

	public function index()
	{
		$this->load->view('jadwal_view');
	}

	public function ambiljadwal($jurusan,$sesi){
		echo json_encode(
				$this->jadwal_model
					->ambilJadwalkelas($jurusan,$sesi)->result());
	}


}
