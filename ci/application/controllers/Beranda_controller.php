<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
    }
    
	public function index()
	{
        $this->load->view("beranda_view");
    }

    public function teknologi(){
        $this->load->view("teknologi_view");
    }

    public function olahraga(){
        $this->load->view("olahraga_view");
    }

    public function infotainment(){
        $this->load->view("infotainment_view");
    }
}
