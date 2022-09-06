<?php

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Contact Page';
		$this->load->view('shop/templates/header', $data);
		$this->load->view('shop/contact');
		$this->load->view('shop/templates/footer');
	}
}