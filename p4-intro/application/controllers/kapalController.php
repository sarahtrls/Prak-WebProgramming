<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kapalController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('kapalModel');
    }
	public function datakapal()
	{
        $data['kapal'] = $this->kapalModel->getAllkapal();
		$this->load->view('kapalView',$data);
	}
}
