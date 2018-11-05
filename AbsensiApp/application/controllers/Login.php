<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("login_model");
		$this->load->helper("security");
		$this->load->library("form_validation");
	}

	private function _validate(){
		$rules = array(
			array(
				"field" => "userid",
				"label" => "User ID",
				"rules" => "required|min_length[5]|max_length[20]"
			),
			array(
				"field" => "password",
				"label" => "Password",
				"rules" => "required|min_length[5]"
			)
		);
		$this->form_validation->set_rules($rules);
		$this->form_validation
			->set_error_delimiters("<span class='help-block'>",
				"</span>");
			
		return $this->form_validation->run();
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function ceklogin(){
		if($this->input->post()){
			if($this->_validate()){
				$userid = $this->input->post("userid");
				$password = do_hash($this->input->post("password"),
								"md5");
				$user = $this->login_model
							->ambilUser($userid,$password);
				if($user->num_rows() > 0){
					redirect("beranda");
				}else{
					$this->session->set_flashdata("error-login",
						"Userid dan Password Salah");
					redirect("login");
				}
			}else{
				$this->load->view("login_view");
			}
		}else{
			$this->session->set_flashdata("error-login",
				"Anda belum memasukkan Userid dan Password");
			redirect("login");
		}
	}
}
