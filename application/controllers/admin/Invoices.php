<?php

class Invoices extends CI_Controller{
    public function index()
    {
        $data['title'] = 'Invoices Page';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/invoices');
        $this->load->view('admin/templates/footer');
    }
}