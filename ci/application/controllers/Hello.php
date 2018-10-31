<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
        echo "Hello World";
    }
    
    public function pagi(){
        echo "Hello, Selamat Pagi";
    }

    public function siang(){
        echo "Hello, Selamat Siang";
    }

    public function sapa($nama,$waktu){
        echo "Hello {$nama}, Selamat {$waktu}";
    }
}
