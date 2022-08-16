<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Controller extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
			$this->form_validation->set_error_delimiters('<br><div class="alert text-danger">', '</div>');
			$this->load->model('student_model','StudentModel');

			if (empty($this->session->userdata('USER'))AND empty($this->session->userdata('USER_ID'))) 
				return redirect('Login');
		}

	public function index()
	{
		
		$this->form_validation->set_rules('id','Student id','required');
		$this->form_validation->set_rules('fname','Student First Name','required');
		$this->form_validation->set_rules('lname','Student Last Name','required');
		$this->form_validation->set_rules('flname','Student Full Name','required');
		$this->form_validation->set_rules('email','Student Email','required');
		$this->form_validation->set_rules('number','Student Phone Number','required');
		$this->form_validation->set_rules('course','Student Following Course','required');
		$this->form_validation->set_rules('batch','Student Batch Number','required');

		if ($this->form_validation->run() == FALSE) {

			$data['title']='Insert Student';
			$this->load->view('temp/header',$data);
			$this->load->view('temp/nav');
			$this->load->view('student');
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');
		}
		else
		{
			$data=array(
				'id'=>$this->input->post('id'),
				'fname'=>$this->input->post('fname'),
				'lname'=>$this->input->post('lname'),
				'flname'=>$this->input->post('flname'),
				'email'=>$this->input->post('email'),
				'number'=>$this->input->post('number'),
				'course'=>$this->input->post('course'),
				'batch'=>$this->input->post('batch'),
			);

			$this->StudentModel->add($data);

			$this->load->view('temp/header');
			print_r('<div class="alert alert-success" role="alert">
			  Insert Data Successfull</div> 
			  <a class="btn btn-success" href="Student">Active</a>');
		}

			

		
	}


	public function delete()
	{

		$id = $this->input->get('id');
		if($this->StudentModel->delete_data($id))
		{
			$title['title']='Delete Student';

			$data['fetch_data']=$this->StudentModel->fetch_data();
			$this->load->view('temp/header',$title);
			$this->load->view('temp/nav');
			$this->load->view('students/d_student',$data);
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');
		}
			

	}

	public function update()
	{
			$title['title']='Update Student';

			$data['fetch_data']=$this->StudentModel->fetch_data();
			$this->load->view('temp/header',$title);
			$this->load->view('temp/nav');
			$this->load->view('students/u_student2',$data);
			$av['user']=$this->session->userdata('USER');
			$this->load->view('temp/nav2',$av);
			$this->load->view('temp/fooder');

	}

	public function update_data()
	{
		
		$id = $this->input->get('id');
		$this->form_validation->set_rules('id','Student id','required');
		$this->form_validation->set_rules('fname','Student First Name','required');
		$this->form_validation->set_rules('lname','Student Last Name','required');
		$this->form_validation->set_rules('flname','Student Full Name','required');
		$this->form_validation->set_rules('email','Student Email','required');
		$this->form_validation->set_rules('number','Student Phone Number','required');
		$this->form_validation->set_rules('course','Student Following Course','required');
		$this->form_validation->set_rules('batch','Student Batch Number','required');

			//$id="AIT15385";
		$data['fetch_data']=$this->StudentModel->fetch_single_data($id);

		if ($this->form_validation->run() == FALSE) {

		$title['title']='Update Student';
		$this->load->view('temp/header',$title);
		$this->load->view('temp/nav');
		$this->load->view('students/u_student',$data);
		$av['user']=$this->session->userdata('USER');
		$this->load->view('temp/nav2',$av);
		$this->load->view('temp/fooder');

		}
		else
		{
			$datas=array(
				'id'=>$this->input->post('id'),
				'fname'=>$this->input->post('fname'),
				'lname'=>$this->input->post('lname'),
				'flname'=>$this->input->post('flname'),
				'email'=>$this->input->post('email'),
				'number'=>$this->input->post('number'),
				'course'=>$this->input->post('course'),
				'batch'=>$this->input->post('batch'),
			);

			$this->StudentModel->update_data($id,$datas);
			$this->load->view('temp/header');
			print_r('<div class="alert alert-success" role="alert">
			  Insert Data Successfull</div> 
			  <a class="btn btn-success" href="Student_Update">Active</a>');
		}
		

}
}