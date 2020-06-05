<?php 

Class Md_produk extends CI_Model 
{
	function get_produk()
	{
		$this->db->order_by('id_barang','DESC');
		$query = $this->db->get('barang');
		return $query->result();
	}
}