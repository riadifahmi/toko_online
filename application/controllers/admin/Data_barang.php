<?php

class Data_barang extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');

    }

    public function index()
    {  
        $data['barang'] = $this->model_barang->tampil_data();
        if( $this->input->post('keyword') ) {
            $data['barang'] = $this->model_barang->cariDataBarang();
        }
        $data['title'] = 'Data Barang Page';

        $data['barang'] = $this->model_barang->getBarang(12, 0);

        $data['gambar'] = $this->model_barang->fetch_image();

        //load libray
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/ci-app/admin/data_barang/index';
        $config['total_rows'] = $this->model_barang->countAllBarang();
        $config['per_page'] = 12;

        //initialize
        $this->pagination->initialize($config);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/data_barang', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg       = $this->input->post('nama_brg');
        $keterangan     = $this->input->post('keterangan');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Diupload!";
            }else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tb_barang');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/data_barang');

    }

    public function edit($id)
    {

        $data['barang'] = $this->model_barang->tampil_data();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update(){
        $id             = $this->input->post('id_brg');
        $nama_brg       = $this->input->post('nama_brg');
        $keterangan     = $this->input->post('keterangan');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok'); 

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'harga'         => $harga,
            'stok'          => $stok
        );

        $where = array(
            'id_brg' => $id
        );

        $this->model_barang->update_data($where, $data, 'tb_barang');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('admin/data_barang');
    }
    

    public function hapus ($id)
    {
        $where = array('id_brg' => $id);
        $this->model_barang->hapus_data($where, 'tb_barang');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/data_barang');
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('admin/templates/header');
        $this->load->view('admin/detail_barang', $data);
        $this->load->view('admin/templates/footer');
    }
    
}