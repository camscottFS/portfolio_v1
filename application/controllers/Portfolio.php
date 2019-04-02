<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Portfolio';
		$this->load->view('templates/header', $data);
		$this->load->view('portfolio');
		$this->load->view('templates/footer');
	}
}
