<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landingController extends CI_Controller {

    public function index()
    {
    $this->load->view('landingView');
    }

    public function about_us()
    {
        $this->load->view('aboutView');
    }
}