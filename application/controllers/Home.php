<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Company Website';
		$this->load->view('home/header',$data);
		$this->load->view('home/home');
		$this->load->view('home/footer');

		// echo "<h1>hallo</h1>";
	}
	
}
