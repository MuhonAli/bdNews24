<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller { 

	public function add_reviews($id){




		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }
		
		$check = $this->db->select('user_id')->from('review')->where('user_id',$this->session->userdata('userid'))->where('news_id', $id)->get()->num_rows();
		if ($check > 0) {

			$msg='<div class="alert alert-danger">You already reviewed on this product.</div>';

			$this->session->set_flashdata('message',$msg);
			
			redirect($_SERVER['HTTP_REFERER']); 

		}

		$this->form_validation->set_rules('comment', 'Comment', 'required');


		if ($this->form_validation->run() == FALSE)
		{


			$msg='<div class="alert alert-danger">Review cannot be empty!</div>';

			$this->session->set_flashdata('message',$msg);
			
			redirect($_SERVER['HTTP_REFERER']);

			
		}else{

			$data['user_id']=$this->session->userdata('userid');
			$data['news_id']=$id;
			$data['comment']=$this->input->post('comment');

			$this->db->insert('review',$data);

			$this->db->set('review','review+1',FALSE);
			$this->db->where('id',$data['news_id']);
			$this->db->update('news');

			/*update review rating*/


			$msg='<div class="alert alert-success">Reviewed successfully!</div>';

			$this->session->set_flashdata('message',$msg);
			redirect($_SERVER['HTTP_REFERER']);


		}

	}

}