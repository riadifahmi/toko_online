<?php

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = 'About Page';
		$this->load->view('shop/templates/header', $data);
        $this->load->view('shop/about');
		$this->load->view('shop/templates/footer');
	}
}