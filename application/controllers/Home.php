<?php

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('model_barang');
		$data['title'] = 'Home Page';
		$data['barang'] = $this->model_barang->tampil_data();
		$this->load->view('shop/templates/header', $data);
        $this->load->view('shop/home', $data);
		$this->load->view('shop/templates/footer');
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'  		=> $barang->id_brg,
			'qty' 		=> 1,
			'price' 	=> $barang->harga,
			'name'		=> $barang->nama_brg
		);

		$this->cart->insert($data);
		redirect('home');
	}

	public function detail($id)
    {
		$this->load->model('model_barang');
        $data['barang'] = $this->model_barang->detail_barang($id);
        $this->load->view('shop/templates/header');
        $this->load->view('shop/detail_home', $data);
        $this->load->view('shop/templates/footer');
    }
}