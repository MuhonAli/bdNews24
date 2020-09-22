<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

		$data['categories']=  $this->db->select('*')->from('categories')->get()->result_array();

		$data['populars']=  $this->db->select('*')->from('news')->order_by('views','desc')->limit(5)->get()->result_array();
	
		$data['latests']=  $this->db->select('*')->from('news')->order_by('id','desc')->limit(9)->get()->result_array();

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

public function sms(){
	require_once "vendor/autoload.php";
	$basic  = new \Nexmo\Client\Credentials\Basic('c1cf87d5', '0TcYhbYWKNNwB3eW');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '8801748613498',
    'from' => 'Nexmo',
    'text' => 'Hello from Nexmo'
]);
		}


}
