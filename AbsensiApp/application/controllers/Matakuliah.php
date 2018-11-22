<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("matakuliah_model");
	}

	public function index()
	{
		$this->load->view('matakuliah_view');
	}

	public function data(){
		echo json_encode($this->matakuliah_model
							->ambilMatakuliah()->result());
	}

	public function baca($id=null){
		echo json_encode($this->matakuliah_model
			->getMatakuliah($id));
	}

	public function hapus($id){
		echo json_encode(array(
			"status" => $this->matakuliah_model->deleteMatakuliah($id)
		));
	}

	public function simpan($mode){
		if($this->_validate($mode)){
			$data = array(
				"idmatakuliah" => $this->input->post("idmatakuliah"),
				"nama" => $this->input->post("nama"),
				"semester" => $this->input->post("semester")				
			);
	
			if($mode=="add"){
				$status = $this->matakuliah_model->createMatakuliah($data);
			}elseif($mode=="edit"){
				$status = $this->matakuliah_model
					->updateMatakuliah($this->input->post("idmatakuliah"),$data);
			}
			
			echo json_encode(array("status" => TRUE));
		}else{
			echo json_encode(array(
				"status" => FALSE,
				"message" => array(
					"idmatakuliah" => form_error("idmatakuliah"),
					"nama" => form_error("nama"),
					"semester" => form_error("semester")
				)
			));
		}
	}

	private function _validate($mode){
		$rules = array(
			array(
				"field" => "idmatakuliah",
				"label" => "idmatakuliah",
				"rules" => "required|exact_length[5]".($mode=="add"?"|is_unique[tblMatakuliah.idmatakuliah]":"")
			),
			array(
				"field" => "nama",
				"label" => "Nama",
				"rules" => "required|max_length[100]"
			),
			array(
				"field" => "semester",
				"label" => "semester",
				"rules" => "required"
			)
		);

		$this->form_validation->set_rules($rules);
		$this->form_validation
			->set_error_delimiters("<span class='help-block'>","</span>");

		return $this->form_validation->run();
	}
}
