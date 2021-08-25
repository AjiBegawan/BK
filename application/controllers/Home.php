<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}
	public function input()
	{
		$this->load->view('InputBarang');
	}
	public function read()
	{
		$data['produk'] = $this->Auth->ProsesReadBarang();
		$this->load->view('TabelBarang', $data);
	}
}