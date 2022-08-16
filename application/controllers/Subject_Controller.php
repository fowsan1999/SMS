<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_Controller extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
			$this->form_validation->set_error_delimiters('<br><div class="alert text-danger">', '</div>');
			$this->load->model('subject_model','SubjectModel');
			if (empty($this->session->userdata('USER'))AND empty($this->session->userdata('USER_ID'))) 
				return redirect('Login');
		}

	public function index()
	{

		$this->form_validation->set_rules('titel','Subject Title','required');
		$this->form_validation->set_rules('department','Subject Department','required');

		if ($this->form_validation->run() == FALSE) {

			$data['title']='Insert Subject';
			$this->load->view('temp/header',$data);
			$this->load->view('temp/nav',$data);
			$this->load->view('subject');
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');
		}
		else
		{
			$data=array(
				'titel'=>$this->input->post('titel'),
				'department'=>$this->input->post('department'),
			);

			$this->SubjectModel->add($data);

			$this->load->view('temp/header');
			print_r('<div class="alert alert-success" role="alert">
			  Insert Data Successfull</div> 
			  <a class="btn btn-success" href="Subject">Active</a>');
		}
		
	}


	public function delete()
	{

		$id = $this->input->get('id');
		if($this->SubjectModel->delete_data($id))
		{
			$title['title']='Delete Subject';

			$data['fetch_data']=$this->SubjectModel->fetch_data();
			$this->load->view('temp/header',$title);
			$this->load->view('temp/nav');
			$this->load->view('subjects/d_subject',$data);
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');
		}
			

	}

	public function update()
	{
			$title['title']='Update Subject';

			$data['fetch_data']=$this->SubjectModel->fetch_data();
			$this->load->view('temp/header',$title);
			$this->load->view('temp/nav');
			$this->load->view('subjects/u_subject2',$data);
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');

	}

	public function update_data()
	{
		
		$id = $this->input->get('id');

		$this->form_validation->set_rules('titel','Subject Title','required');
		$this->form_validation->set_rules('department','Subject Department','required');

		$data['fetch_data']=$this->SubjectModel->fetch_single_data($id);

		if ($this->form_validation->run() == FALSE) {

		$title['title']='Update Subject';
		$this->load->view('temp/header',$title);
		$this->load->view('temp/nav');
		$this->load->view('subjects/u_subject',$data);
		$av['user']=$this->session->userdata('USER');
		$this->load->view('temp/nav2',$av);
		$this->load->view('temp/fooder');

		}
		else
		{
			$datas=array(
				'titel'=>$this->input->post('titel'),
				'department'=>$this->input->post('department'),
			);

			$this->SubjectModel->update_data($id,$datas);
			$this->load->view('temp/header');
			print_r('<div class="alert alert-success" role="alert">
			  Insert Data Successfull</div> 
			  <a class="btn btn-success" href="Subject_Update">Active</a>');
		}
		

}
}