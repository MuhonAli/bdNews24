<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index($id=null)
	{
		$this->load->library('pagination');
		$data['categories']=  $this->db->select('*')->from('categories')->get()->result_array();
	
		if (!empty($_GET['search'])) {
			$query = $this->db->LIKE('title', $_GET['search'],'both');
			$data['search']  = $_GET['search'];
			
		}

		if (!empty($_GET['created_on'])) {
			$query = $this->db->LIKE('created_on', $_GET['created_on']);
			$data['created_on']  = $_GET['created_on'];
			
		}

		if (!empty($id)) {
			$query = $this->db->where('category_id',$id);
			
		}
		$query=  $this->db->select('*')->from('news')->order_by('id','desc')->get();

		$data['totalnewss'] = $query->num_rows();

		$data['result'] = $query->result_array();

		$config['suffix']          = "?" . http_build_query($_GET, '', "&");
		$config['base_url']        = site_url('News/index');
		$config['total_rows']      =$data['totalnewss'];
		$config['per_page']        = 9;
		$config['num_links']       = 4;
		$config['full_tag_open']   = '<ul class="pagination no-margin">';
		$config['full_tag_close']  = '</ul>';
		$config['cur_tag_open']    = '<li class="active" style="padding:10px;"><a href="">';
		$config['cur_tag_close']   = '</a></li>';
		$config['prev_tag_open']   = '<li style="padding:10px;">';
		$config['prev_tag_close']  = '</li>';
		$config['next_tag_open']   = '<li style="padding:10px;">';
		$config['next_tag_close']  = '</li>';
		$config['num_tag_open']    = '<li style="padding:10px;">';
		$config['num_tag_close']   = '</li>';
		$config['last_tag_open']   = '<li style="padding:10px;">';
		$config['last_tag_close']  = '</li>';
		$config['first_tag_open']  = '<li style="padding:10px;">';
		$config['first_tag_close'] = '</li>';
		$config['next_link']       = 'Next >';
		$config['prev_link']       = '< Prev';

		if ($this->uri->segment(3)) {
			$data['segment'] = $this->uri->segment(3);
		} else {
			$data['segment'] = 0;
		}



		$this->pagination->initialize($config);

		if (!empty($_GET['search'])) {
			$query = $this->db->LIKE('title', $_GET['search'],'both');
			$data['search']  = $_GET['search'];
			
		}

				if (!empty($_GET['created_on'])) {
			$query = $this->db->LIKE('created_on', $_GET['created_on']);
			$data['created_on']  = $_GET['created_on'];
			
		}

		$query = $this->db->limit($config['per_page'], $data['segment'])->select('*')->from('news')->order_by('id','desc')->get();

		$data['result'] = $query->result_array();


		$this->load->view('include/header',$data);
		$this->load->view('news',$data);
		$this->load->view('include/footer');
	}

	public function details($id)
	{	

		$this->db->set('views','views+1',FALSE);
		$this->db->where('id',$id);
		$this->db->update('news');

		$data['categories']=  $this->db->select('*')->from('categories')->get()->result_array();
		$data['news']=  $this->db->select('*')->from('news')->where('id',$id)->get()->result_array();

		$data['populars']=  $this->db->select('*')->from('news')->order_by('views','desc')->limit(5)->get()->result_array();
	
		$data['reviews'] =  $this->db->select('*,review.id as review_id, users.id as id')->from('review')->join('users', 'review.user_id =users.id')->where('review.news_id',$id)->get()->result_array();

/*echo "<pre>";
		var_dump($data['reviews'] );
		exit;*/

		$data['categoryForFooter']=  $this->db->select('*')->from('categories')->limit(5)->get()->result_array();
		$data['popularForFooter']=  $this->db->select('*')->from('news')->order_by('views','desc')->limit(3)->get()->result_array();
		
		$this->load->view('include/header',$data);
		$this->load->view('details',$data);
		$this->load->view('include/footer',$data);
	}

	public function category($id)
	{
		$this->load->library('pagination');
		$data['categories']=  $this->db->select('*')->from('categories')->get()->result_array();
		if (!empty($_GET['search'])) {
			$query = $this->db->LIKE('title', $_GET['search'],'both');
			$data['search']  = $_GET['search'];
			
		}

		$query=  $this->db->select('*')->from('news')->where('category_id',(int)$id)->order_by('id','desc')->get();

		$data['totalnewss'] = $query->num_rows();

		$data['result'] = $query->result_array();
		$data['categoryForFooter']=  $this->db->select('*')->from('categories')->limit(5)->get()->result_array();
		$data['popularForFooter']=  $this->db->select('*')->from('news')->order_by('views','desc')->limit(3)->get()->result_array();
		$this->load->view('include/header',$data);
		$this->load->view('news',$data);
		$this->load->view('include/footer',$data);
	}



}