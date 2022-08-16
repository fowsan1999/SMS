<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_Controller extends CI_Controller
	{
		public function __construct()
        {
            parent::__construct();
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->load->model('login_model','LoginModel');
		}
		public function index()
		{
			$this->form_validation->set_rules('username','User Name','required|max_length[15]');
			$this->form_validation->set_rules('password','User Password','required|max_length[15]');
			if ($this->form_validation->run() == FALSE)
            {
                $data['title']='Login';
        				$this->load->view('temp/main/header',$data);
        				$this->load->view('login',$data);
            }
            else
            {
            	$where=array(
            		'username'=>$this->input->post('username'),
            		'password'=>md5($this->input->post('password')),
            	);

               $result= $this->LoginModel->login_user($where);
               if ($result > 0)
               {
                  $newdata = array(
                 'USER'    => $where['username'],
                 'USER_ID' => $result,
               );

                     $this->session->set_userdata($newdata);
               		return redirect('Admin');
               }
               else
               {
               		echo "<script>
          window.location.href='Login';
          alert('Incorrect User Name and Password');
          </script>";
                     $this->db->close();
               }
            }
			
		}

    public function logout()
    {
      $this->session->unset_userdata('USER_ID');
      return redirect(base_url());
    }
	}
