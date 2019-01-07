<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function  __construct(){
        parent::__construct();
        $this->load->model("laporan_model");
    }
	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function mahasiswa(){
        if($this->input->get()){
            $this->load->view("laporan/mahasiswa_laporan",array(
                "mahasiswa" => $this->laporan_model
                    ->getMahasiswaKelas($this->input->get("idkelas"))
                    ->result(),
                "title" => "Laporan Mahasiswa"
            ));
        }else{
            $this->load->view("dialog/kelas_dialog",
                array(
                    "action" => "laporan/mahasiswa",
                    "kelas" => $this->laporan_model->getKelas()->result()
                ));
        }
    }

    public function dosen(){
        $this->load->view("laporan/dosen_laporan",array(
            "dosen" => $this->laporan_model->getDosen()->result(),
            "title" => "Laporan Dosen"
        ));
    }

    public function absensi(){
        if($this->input->get()){
            $this->load->view("laporan/absensi_laporan",array(
                "absensi" => $this->laporan_model
                                    ->getAbsensi($this->input->get("nim"),$this->input->get("idmatakuliah"))
                                    ->result(),
                "title" => "Laporan Absensi"
            ));
        }else{
            $this->load->view("dialog/mahasiswamatakuliah_dialog",
                array(
                    "action" => "laporan/absensi",
                    "mahasiswa" => $this->laporan_model->getMahasiswa()->result(),
                    "matakuliah" => $this->laporan_model->getMatakuliah()->result()
                ));
        }
    }
}
