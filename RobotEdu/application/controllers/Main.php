<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Model_artikel');
}
	public function index()
	{
		$this->load->view('frontEnd/index');
	}

	public function about(){
		$this->load->view('frontEnd/about');
	}

	public function artikel(){
	    $data = $this->Model_artikel->getArtikel();
		$this->load->view('frontEnd/course',array('data'=>$data));
	}
	public  function showArtikel(){
	    $this->load->view('frontEnd/artikel');
    }
}
