<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_news extends CI_Controller {



	public function index(){

		$this->load->library('pagination');

		if (!empty($_GET['id'])) {

			$query = $this->db->where('news.id', $_GET['id']);
			$id    = $_GET['id'];
			$data['title'] = $_GET['id'];
		}

		if (!empty($_GET['title'])) {

			$query = $this->db->LIKE('news.title', $_GET['title']);
			$data['title'] = $_GET['title'];
		}


		if (!empty($_GET['description'])) {

			$query = $this->db->where('news.description', $_GET['description']);
			$data['description'] = $_GET['description'];
		}

		$query=$this->db->select('*, news.id as id')->from('news')->join('categories', 'categories.id=news.category_id')->order_by('news.id', 'desc')->get();

		$data['totalnews'] = $query->num_rows();

		$data['result'] = $query->result_array();

		$config['suffix']          = "?" . http_build_query($_GET, '', "&");
		$config['base_url']        = site_url('Manage_news/index/');
		$config['total_rows']      = $query->num_rows();
		$config['per_page']        = 10;
		$config['num_links']       = 4;
		$config['full_tag_open']   = '<ul class="pagination no-margin">';
		$config['full_tag_close']  = '</ul>';
		$config['cur_tag_open']    = '<li class="active"><a href="">';
		$config['cur_tag_close']   = '</a></li>';
		$config['prev_tag_open']   = '<li>';
		$config['prev_tag_close']  = '</li>';
		$config['next_tag_open']   = '<li>';
		$config['next_tag_close']  = '</li>';
		$config['num_tag_open']    = '<li>';
		$config['num_tag_close']   = '</li>';
		$config['last_tag_open']   = '<li>';
		$config['last_tag_close']  = '</li>';
		$config['first_tag_open']  = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['next_link']       = 'Next >';
		$config['prev_link']       = '< Prev';

		if ($this->uri->segment(3)) {
			$data['segment'] = $this->uri->segment(3);
		} else {
			$data['segment'] = 0;
		}



		$this->pagination->initialize($config);

		if (!empty($_GET['id'])) {

			$query = $this->db->where('news.id', $_GET['id']);
			$id    = $_GET['id'];
			$data['title'] = $_GET['id'];
		}

		if (!empty($_GET['title'])) {

			$query = $this->db->LIKE('news.title', $_GET['title']);
			$data['title'] = $_GET['title'];
		}

		if (!empty($_GET['description'])) {

			$query = $this->db->where('news.description', $_GET['description']);
			$data['description'] = $_GET['description'];
		}


			$query = $this->db->limit($config['per_page'], $data['segment'])->select('*, news.id as id')->from('news')->join('categories', 'categories.id=news.category_id')->order_by('news.id', 'desc')->get();

		$data['result'] = $query->result_array();


		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('news/news_list',$data);
		$this->load->view('admin/footer');
		
	} 

	public function add_news()
	{
		
		$this->form_validation->set_rules('title', 'News Headline', 'required');


		$this->form_validation->set_rules('category_id', 'Category Name', 'required');
		

		$this->form_validation->set_rules('description', 'Description', 'required');


		if ($this->form_validation->run() == FALSE)
		{

			$query=  $this->db->select('*')->from('categories')->get();
			$data['categories'] = $query->result_array();



			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('news/add_news',$data);
			$this->load->view('admin/footer');
		}else{


			if (($this->input->post('category_id')<1)) {
				$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-danger">
					<strong>Category name is required</strong></div>');
				redirect($_SERVER['HTTP_REFERER']);
			}	

			$data['title']=$this->input->post('title');
			$data['category_id']=$this->input->post('category_id');
			$data['description']=nl2br($this->input->post('description'));

			
			if($_FILES && $_FILES['image']['name']){

				$config['upload_path'] = './asset/images/news';
				$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					$this->session->set_flashdata('message', $this->upload->display_errors());
					redirect($_SERVER['HTTP_REFERER']);
				} else {

					$avatar = $this->upload->data();
					$avatar_name = $avatar['file_name'];
					$data['image']=$avatar_name;

					$config['image_library'] = 'gd2';
					$config['source_image'] = 'asset/images/news/'.$data['image'].'';
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = FALSE;
					$config['quality'] = '100%';

				}

				$this->load->library('image_lib',$config);


				if ( ! $this->image_lib->resize())
				{
					echo $this->image_lib->display_errors();
				}

			} else{
				$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-danger">
					<strong>No image added for news</strong></div>');
				redirect($_SERVER['HTTP_REFERER']);
			}




			$this->db->insert('news',$data);

			$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-success">
				<strong>news added successfully!</strong></div>');

			redirect('Manage_news/add_news');

		}
		
		
	}


	public function edit_news($id)
	{
		
		$this->form_validation->set_rules('title', 'news Name', 'required');
		$this->form_validation->set_rules('category_id', 'Category Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');


		if ($this->form_validation->run() == FALSE)
		{

			$query=  $this->db->select('*')->from('news')->where('id',$id)->get();
			$data['news'] = $query->result_array();


			$query=  $this->db->select('*')->from('categories')->where('id',$data['news'][0]['category_id'])->get();

			$data['cat_name'] = $query->result_array();
			$data['category_name'] = $data['cat_name'][0]['name'];


			$query=  $this->db->select('*')->from('categories')->get();

			$data['categories'] = $query->result_array();

			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('news/edit_news',$data);
			$this->load->view('admin/footer');
		}else{

			if (($this->input->post('category_id')<1)) {
				$this->session->set_flashdata('success','<div style="text-align:center;" class="alert alert-danger">
					<strong>Category name is required</strong></div>');
				redirect($_SERVER['HTTP_REFERER']);
			}

			$data['title']=$this->input->post('title');
			$data['category_id']=$this->input->post('category_id');
			$data['description']=nl2br($this->input->post('description'));



			if($_FILES && $_FILES['image']['name']){

				$config['upload_path'] = './asset/images/news';
				$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					$this->session->set_flashdata('message', $this->upload->display_errors());
					redirect($_SERVER['HTTP_REFERER']);
				} else {

					$avatar = $this->upload->data();
					$avatar_name = $avatar['file_name'];
					$data['image']=$avatar_name;

					$config['image_library'] = 'gd2';
					$config['source_image'] = 'asset/images/news/'.$data['image'].'';
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = FALSE;
					$config['quality'] = '100%';

				}

				$this->load->library('image_lib',$config);


				if ( ! $this->image_lib->resize())
				{
					echo $this->image_lib->display_errors();
				}

			//user select file
			} 

			
			$this->db->where('id',$id);

			$this->db->update('news',$data);

			$msg='<div class="alert alert-success">Updated successfully!</div>';

			$this->session->set_flashdata('message',$msg);

			redirect('Manage_news');

		}
	}

	public function delete_news($id)
	{
		
		$this->db->where('id',$id);
		$this->db->delete('news');

		$msg='<div class="alert alert-success">Deleted successfully!</div>';
		
		$this->session->set_flashdata('message',$msg);

		redirect('Manage_news');
	}


	public function add_offer($id, $percent)
	{

		

		$this->db->where('id',$id);
		$this->db->set('offer',$percent);
		$this->db->update('news');

		$msg='<div class="alert alert-success">Offer added successfully!</div>';
		
		$this->session->set_flashdata('message',$msg);

		redirect('Manage_news');
	}






}