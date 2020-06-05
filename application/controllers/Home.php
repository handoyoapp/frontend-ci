<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'Beranda'; 
		$this->load->view('beranda',$data);
	}

	public function beranda()
	{
		$data['title'] = 'Beranda'; 
		$this->load->view('beranda',$data);
	}

	public function produk()
	{
		$data['title'] = 'Produk'; 
		$this->load->model('md_produk');
		$data['query'] = $this->md_produk->get_produk();
		$this->load->view('produk',$data);
	}

	public function pembayaran()
	{
		$data['title'] = 'Pembayaran';
		$this->load->view('pembayaran',$data);
	}

	public function tentang()
	{
		$data['title'] = 'Tentang';
		$this->load->view('tentang',$data);
	}
}
