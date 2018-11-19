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

	public function baca($id=null){
		echo json_encode($this->mahasiswa_model
			->getMahasiswa($id));
	}

	public function hapus($id){
		echo json_encode(array(
			"status" => $this->mahasiswa_model->deleteMahasiswa($id)
		));
	}

	public function simpan($mode){
		if($this->_validate()){
			$data = array(
				"nim" => $this->input->post("nim"),
				"nama" => $this->input->post("nama"),
				"alamat" => $this->input->post("alamat"),
				"telepon" => $this->input->post("telepon")
			);
	
			if($mode=="add"){
				$status = $this->mahasiswa_model->createMahasiswa($data);
			}elseif($mode=="edit"){
				$status = $this->mahasiswa_model
					->updateMahasiswa($this->input->post("nim"),$data);
			}
			
			echo json_encode(array("status" => $status > 0));
		}else{
			echo json_encode(array(
				"status" => FALSE,
				"message" => array(
					"nim" => form_error("nim"),
					"nama" => form_error("nama"),
					"telepon" => form_error("telepon")
				)
			));
		}
	}

	private function _validate(){
		$rules = array(
			array(
				"field" => "nim",
				"label" => "NIM",
				"rules" => "required|exact_length[11]|is_unique[tblmahasiswa.nim]"
			),
			array(
				"field" => "nama",
				"label" => "Nama",
				"rules" => "required|max_length[100]"
			),
			array(
				"field" => "telepon",
				"label" => "Telepon",
				"rules" => "max_length[15]"
			)
		);

		$this->form_validation->set_rules($rules);
		$this->form_validation
			->set_error_delimiters("<span class='help-block'>","</span>");

		return $this->form_validation->run();
	}
}
