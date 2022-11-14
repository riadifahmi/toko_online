<?php

use LDAP\Result;

class Model_barang extends CI_Model{
    public function tampil_data() 
    {
        return $this->db->get('tb_barang')->result_array();

    }

    public function fetch_image()
    {
        return $this->db->get('tb_barang')->result();
    }

    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_barang($id,$data){
        return $this->db->get_where('tb_barang', ['id_brg' => $id])->row_array();
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_brg', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('stok', $keyword);  
        return $this->db->get('tb_barang')->result_array();
    }

    public function find($id)
    {
        $result = $this->db->where('id_brg',$id)
                            ->limit(1)
                            ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    // public function detail_barang($id)
    // {
    //     return $this->db->get_where('tb_barang', ['id_brg' => $id])->row_array();
    // }


    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg',$id_brg)->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }

        public function getBarang($limit, $start)
        {
            return $this->db->get('tb_barang', $limit, $start)->result_array();
        }

        public function countAllBarang()
        {
            return $this->db->get('tb_barang')->num_rows();
        }



}