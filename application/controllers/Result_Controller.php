<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result_Controller extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
			$this->form_validation->set_error_delimiters('<br><div class="alert text-danger">', '</div>');
			$this->load->model('Result_model','ResultModel');
			if (empty($this->session->userdata('USER'))AND empty($this->session->userdata('USER_ID'))) 
				return redirect('Login');
		}

	public function index()
	{

		$this->form_validation->set_rules('student_id','result Title','required');
		$this->form_validation->set_rules('subject_name','result Department','required');
		$this->form_validation->set_rules('marks','result Department','required');

		if ($this->form_validation->run() == FALSE) {

			$data['title']='Insert Result';
			$this->load->view('temp/header',$data);
			$this->load->view('temp/nav',$data);
			$this->load->view('result');
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');
		}
		else
		{
			$data=array(
				'student_id'=>$this->input->post('student_id'),
				'subject_name'=>$this->input->post('subject_name'),
				'marks'=>$this->input->post('marks'),
			);

			$this->ResultModel->add($data);

			$this->load->view('temp/header');
			print_r('<div class="alert alert-success" role="alert">
			  Insert Data Successfull</div> 
			  <a class="btn btn-success" href="result">Active</a>');
		}
		
	}


	public function delete()
	{

		$id = $this->input->get('id');
		if($this->ResultModel->delete_data($id))
		{
			$title['title']='Delete Result';

			$data['fetch_data']=$this->ResultModel->fetch_data();
			$this->load->view('temp/header',$title);
			$this->load->view('temp/nav');
			$this->load->view('results/d_result',$data);
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');
		}
			

	}

	public function update()
	{
			$title['title']='Update Result';

			$data['fetch_data']=$this->ResultModel->fetch_data();
			$this->load->view('temp/header',$title);
			$this->load->view('temp/nav');
			$this->load->view('results/u_result2',$data);
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');

	}

	public function update_data()
	{
		
		$id = $this->input->get('id');

		$this->form_validation->set_rules('student_id','result Title','required');
		$this->form_validation->set_rules('subject_name','result Department','required');
		$this->form_validation->set_rules('marks','result Department','required');

		$data['fetch_data']=$this->ResultModel->fetch_single_data($id);

		if ($this->form_validation->run() == FALSE) {

		$title['title']='Update Result';
		$this->load->view('temp/header',$title);
		$this->load->view('temp/nav');
		$this->load->view('results/u_result',$data);
		$av['user']=$this->session->userdata('USER');
		$this->load->view('temp/nav2',$av);
		$this->load->view('temp/fooder');

		}
		else
		{
			$datas=array(
				'student_id'=>$this->input->post('student_id'),
				'subject_name'=>$this->input->post('subject_name'),
				'marks'=>$this->input->post('marks'),
			);

			$this->ResultModel->update_data($id,$datas);
			$this->load->view('temp/header');
			print_r('<div class="alert alert-success" role="alert">
			  Insert Data Successfull</div> 
			  <a class="btn btn-success" href="Result_Update">Active</a>');
		}
		

}
}