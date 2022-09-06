<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $data['title'] = 'Dashboard Page';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/templates/footer');
    }
}