<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{

		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');


		if ($this->form_validation->run() == FALSE)
		{
			$data['categoryForFooter']=  $this->db->select('*')->from('categories')->limit(5)->get()->result_array();
			$data['popularForFooter']=  $this->db->select('*')->from('news')->order_by('views','desc')->limit(3)->get()->result_array();
			$data['categories']=  $this->db->select('*')->from('categories')->get()->result_array();
			$this->load->view('include/header', $data);
			$this->load->view('register');
			$this->load->view('include/footer');
		} else{

			$data['email']=$this->input->post('email');
			$data['password']=md5($this->input->post('password'));

			$this->db->insert('users',$data);

			$insert_id = $this->db->insert_id();
			
			$last_id=md5($insert_id);
			
			
			$this->db->where('id',$insert_id);
			$this->db->set('unique_key',$last_id);
			$this->db->set('status',1);
			$this->db->update('users');
			
				//$edata['ulink']=base_url().'verify/pass/'.$last_id.'';
				//$edata['uname']=$data['email'];
				//$edata['uemail']=$data['email'];
			
				//$this->load->view('send_email',$edata);
			
			$msg='<div class="alert alert-success">Congratulations! Your Account Created successfully.</div>';
			
			$this->session->set_flashdata('message',$msg);

			redirect('Register/index');

		}
	}
}
