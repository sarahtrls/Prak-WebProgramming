<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landingController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model("kapalModel");
    }

    public function index()
    {
    $this->load->view('layout/header');    
    $this->load->view('landingView');
    $this->load->view('layout/footer'); 
    }

    public function about_us()
    {
    $this->load->view('layout/header');     
    $this->load->view('aboutView');
    $this->load->view('layout/footer');
    }

    public function ship()
    {
        $this->load->view('layout/header');
        $data['kapal']=$this->kapalModel->getAllKapal();
		$this->load->view('kapalView',$data);
        $this->load->view('layout/footer');
    }
}