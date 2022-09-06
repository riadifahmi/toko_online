<?php

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model('model_barang');
		$data['title'] = 'Products';
		$data['barang'] = $this->model_barang->tampil_data();
		if( $this->input->post('keyword') ) {
            $data['barang'] = $this->model_barang->cariDataBarang();
        }
		$this->load->view('shop/templates/header', $data);
        $this->load->view('shop/products', $data);
		$this->load->view('shop/templates/footer');
	}

	public function detail($id)
    {
		$this->load->model('model_barang');
        $data['barang'] = $this->model_barang->detail_barang($id);
        $this->load->view('shop/templates/header');
        $this->load->view('shop/detail_products', $data);
        $this->load->view('shop/templates/footer');
    }
}