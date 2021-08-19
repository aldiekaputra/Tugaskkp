<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_gambarbarang extends CI_Model 
{
    public function get_all_data()
    {
        $this->db->select('tbl_barang.*,COUNT(tbl_gambar.id_barang) as total_gambar');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_gambar','tbl_gambar.id_gambar = tbl_barang.id_barang','left');
        $this->db->group_by('tbl_barang.id_barang');
        $this->db->order_by('tbl_barang.id_barang','desc');
        return $this->db->get()->result();
    }
} 