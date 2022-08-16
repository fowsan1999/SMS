<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function index()
	{
		$data['title']="Home";
		$this->load->view("temp/main/header",$data);
		$this->load->view('temp/main/nav');
		$this->load->view('home',$data);
		$this->load->view("temp/main/fooder");
	}

	
}
