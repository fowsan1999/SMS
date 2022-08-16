<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			if (empty($this->session->userdata('USER'))AND empty($this->session->userdata('USER_ID'))) 
				return redirect('Login');
		}

	public function index()
	{
		$data['title']='Hello World';
		$this->load->view('temp/header',$data);
		$this->load->view('temp/nav',$data);
		$this->load->view('admin');
		$av['user']=$this->session->userdata('USER');
		$this->load->view('temp/nav2',$av);
		$this->load->view('temp/fooder');
	}

	public function setting()
	{
		$id['userid']=$this->session->userdata('USER_ID');


		$this->form_validation->set_rules('username','Subject Title','required');
		$this->form_validation->set_rules('password','Subject Department','required');
		$this->form_validation->set_rules('password1','Subject Department','required');

		if ($this->form_validation->run() == FALSE) {

			$av['user']=$this->session->userdata('USER');
			$data['title']='Hello World';
			$this->load->view('temp/header',$data);
			$this->load->view('setting',$av);
		}
		else
		{
			$datas=array(
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
			);

			$this->SubjectModel->admin_data($id,$datas);
			$this->load->view('temp/header');
			print_r('<div class="alert alert-success" role="alert">
			  Insert Data Successfull</div> 
			  <a class="btn btn-success" href="Subject_Update">Active</a>');
		}
	}

}