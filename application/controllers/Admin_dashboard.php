<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {


	public function index()
	{


		if(($this->session->userdata('admin_id'))){
		}else{ redirect('Admin'); }

		$data['admin'] = $this->db->select('*')->from('admins')->get()->result_array();

			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/admin_dashboard', $data);
			$this->load->view('admin/footer');
	}

}