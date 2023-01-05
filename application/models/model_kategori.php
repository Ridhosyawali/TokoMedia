<?php

class Model_kategori extends CI_Model{
    public function data_alat_musik(){
       return $this->db->get_where("tb_barang",array('kategori' => 'alat musik'));
    }

    public function data_alat_olahraga(){
        return $this->db->get_where("tb_barang",array('kategori' => 'alat olahraga'));
     }
    
    public function data_alat_tulis(){
        return $this->db->get_where("tb_barang",array('kategori' => 'alat tulis'));
     }
    
    public function data_buku(){
        return $this->db->get_where("tb_barang",array('kategori' => 'buku'));
     }

    public function data_tas(){
        return $this->db->get_where("tb_barang",array('kategori' => 'tas'));
    }
}