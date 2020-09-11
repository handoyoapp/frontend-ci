<?php 

Class Md_produk extends CI_Model 
{
	function get_produk()
	{
		$this->db->order_by('id_barang','DESC');
		$query = $this->db->get('barang');
		return $query->result();
	}

	function get_produk_detail($id)
	{
		$this->db->order_by('id_barang','DESC');
		$this->db->where('id_barang',$id);
		$query = $this->db->get('barang');
		return $query;
	}
}