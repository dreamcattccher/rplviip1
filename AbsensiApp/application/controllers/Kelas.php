<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("kelas_model");
	}

	public function index()
	{
		$this->load->view('kelas_view');
	}

	public function data(){
		echo json_encode($this->kelas_model
							->ambilKelas()->result());
	}

	public function baca($id=null){
		echo json_encode($this->kelas_model
			->getKelas($id));
	}

	public function hapus($id){
		echo json_encode(array(
			"status" => $this->kelas_model->deleteKelas($id)
		));
	}

	public function simpan($mode){
		if($this->_validate($mode)){
			$data = array(
				"idkelas" => $this->input->post("idkelas"),
				"semester" => $this->input->post("semester"),
				"jurusan" => $this->input->post("jurusan"),
				"sesi" => $this->input->post("sesi")
			);
	
			if($mode=="add"){
				$status = $this->kelas_model->createKelas($data);
			}elseif($mode=="edit"){
				$status = $this->kelas_model
					->updateKelas($this->input->post("idkelas"),$data);
			}
			
			echo json_encode(array("status" => TRUE));
		}else{
			echo json_encode(array(
				"status" => FALSE,
				"message" => array(
					"idkelas" => form_error("idkelas"),
					"semester" => form_error("semester"),
					"jurusan" => form_error("jurusan"),
					"sesi" => form_error("sesi")
				)
			));
		}
	}

	private function _validate($mode){
		$rules = array(
			array(
				"field" => "idkelas",
				"label" => "idkelas",
				"rules" => "required|exact_length[5]".($mode=="add"?"|is_unique[tblKelas.idkelas]":"")
			),
			array(
				"field" => "semester",
				"label" => "semester",
				"rules" => "required"
			),
			array(
				"field" => "jurusan",
				"label" => "jurusan",
				"rules" => "required"
			),
			array(
				"field" => "sesi",
				"label" => "sesi",
				"rules" => "required"
			)
		);

		$this->form_validation->set_rules($rules);
		$this->form_validation
			->set_error_delimiters("<span class='help-block'>","</span>");

		return $this->form_validation->run();
	}
}
