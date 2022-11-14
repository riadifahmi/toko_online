<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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

	public function detail($id_brg)
    {
		$this->load->model('model_barang');
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('shop/templates/header');
        $this->load->view('shop/detail_products', $data);
        $this->load->view('shop/templates/footer');
    }

	public function tambah_ke_keranjang($id)
	{
		$this->load->model('model_barang');
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'	 	=> $barang->id_brg,
			'qty' 		=> 1,
			'price' 	=> $barang->harga,
			'name' 		=> $barang->nama_brg
		);
		// var_dump($data);
		$this->cart->insert($data);
		redirect('products');
	}

	public function detail_keranjang()
	{
		$this->load->model('model_barang');
		$data['barang'] = $this->model_barang->tampil_data();
		if ($this->input->post('keyword')) {
			$data['barang'] = $this->model_barang->cariDataBarang();
		}
		$this->load->view('shop/templates/header');
		$this->load->view('shop/keranjang');
		$this->load->view('shop/templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('products');
	}

	public function pembayaran()
	{
		$get_prov = $this->db->select('*')->from('wilayah_provinsi')->get();

		$data['provinsi'] = $get_prov->result();
		$data['path'] = base_url('assets');   

		$this->load->view('shop/templates/header');
		$this->load->view('shop/pembayaran', $data);
		$this->load->view('shop/templates/footer');
	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){

		$this->cart->destroy();
		$this->load->view('shop/templates/header');
		$this->load->view('shop/proses_pesanan');
		$this->load->view('shop/templates/footer');
	}else {
		echo "Maaf, Pesanan Anda Gagal Diproses";
	}
}

function add_ajax_kab($id_prov)
{
	$query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
	$data = "<option value=''>- Select Kabupaten -</option>";
	foreach ($query->result() as $value) {
		$data .= "<option value='".$value->id."'>".$value->nama."</option>";
	}
	echo $data;
}

function add_ajax_kec($id_kab)
{
	$query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
	$data = "<option value=''> - Pilih Kecamatan - </option>";
	foreach ($query->result() as $value) {
		$data .= "<option value='".$value->id."'>".$value->nama."</option>";
	}
	echo $data;
}

function add_ajax_des($id_kec)
{
	$query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
	$data = "<option value=''> - Pilih Desa - </option>";
	foreach ($query->result() as $value) {
		$data .= "<option value='".$value->id."'>".$value->nama."</option>";
	}
	echo $data;
}

}