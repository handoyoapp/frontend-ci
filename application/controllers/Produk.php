<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	public function __construct() {
		parent:: __construct();
		$this->load->model('md_produk');
	 }   

	public function index()
	{
		$data['title'] = 'Produk Detail'; 
		$data['query'] = $this->md_produk->get_produk_detail($this->input->get('id'));
		$this->load->view('produk_detail',$data);
	}

	public function produk_detail()
	{
		$data['title'] = 'Produk Detail'; 
		$data['query'] = $this->md_produk->get_produk_detail($this->input->get('id'));
		$this->load->view('produk_detail',$data);
	}
}
