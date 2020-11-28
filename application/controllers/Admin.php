<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE)
		{

			
			$this->load->view('admin/login');

		}else{

			$data['email']=$this->input->post('email');
			$data['password']=md5($this->input->post('password'));

			$this->db->where('email',$data['email']);
			$this->db->where('password',$data['password']);
			$query=$this->db->get('admins');
			$result=$query->result_array();


			if ($result) {

				$this->session->set_userdata('admin_id', $result[0]['id']);
				$this->session->set_userdata('admin_email', $result[0]['email']);
				
				redirect('Admin_dashboard');
			}
			else{

				$msg='<div class="alert alert-danger">Invalid Email or Password </div>';

				$this->session->set_flashdata('message',$msg);

				redirect('Admin');

			}

		}
	}



	public function change_email($id)
	{
		$email = $this->input->post('email');
		$this->db->set('email', $email);
		$this->db->where('id',$id);
		$this->db->update('admins');
		$msg='<div class="alert alert-success">Email Updated successfully!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function change_password($id)
	{

		$password = md5($this->input->post('password'));
		$this->db->set('password', $password);
		$this->db->where('id',$id);
		$this->db->update('admins');

		$msg='<div class="alert alert-success">Password Updated successfully!</div>';
		
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function logout()
	{
		$this->session->sess_destroy();
		
		redirect('Admin');
	}

}