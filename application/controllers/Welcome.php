<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		 $today = $date = date('Y-m-d');
		 $days_ago = date('Y-m-d', strtotime('-5 days', strtotime($today)));

		$data['categories']=  $this->db->select('*')->from('categories')->get()->result_array();

		$data['populars']=  $this->db->select('*')->from('news')->order_by('views','desc')->limit(5)->get()->result_array();
	
		$data['latests']=  $this->db->select('*')->from('news')->order_by('id','desc')->limit(9)->get()->result_array();

		$data['todays']=  $this->db->select('*')->from('news')->like('created_on',$today)->order_by('id','desc')->get()->result_array();

		$data['pinned'] =  $this->db->select('*')->from('news')->where('pinned_on >=',$days_ago)->where('pinned_on <=',$today)->order_by('id','desc')->get()->result_array();

		$data['topNews']=  $this->db->select('*')->from('news')->order_by('id','desc')->limit(7)->get()->result_array();

		$data['breakingNews']=  $this->db->select('*')->from('news')->order_by('id','desc')->limit(3)->get()->result_array();

		$data['categoryForFooter']=  $this->db->select('*')->from('categories')->limit(5)->get()->result_array();
		$data['popularForFooter']=  $this->db->select('*')->from('news')->order_by('views','desc')->limit(3)->get()->result_array();
		$this->load->view('include/header',$data);
		$this->load->view('home',$data);
		$this->load->view('include/footer',$data);
	}

	public function contact()
	{
		$this->load->library("cart");
		$data['total_cart_items'] = count($this->cart->contents());
		$data['visible'] = 1;
		$this->load->view('include/header',$data);
		$this->load->view('contact',$data);
		$this->load->view('include/footer');
	}

	public function pin_news($id)
	{
		$today = $date = date('Y-m-d');
		 $pinned_on = $_GET['pinned_on'];
		 if (!empty($pinned_on)) {
		 			$this->db->set('pinned_on', $pinned_on);
		 } else{
		$this->db->set('pinned_on', $today);
		 }

		$this->db->where('id',$id);
		$this->db->update('news');
		$msg='<div class="alert alert-success">News pinned successfully!</div>';
		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);
	}


}
