<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pageTest extends CI_Controller {

	public function index()
	{
		$this->load->view('test/sukses');
	}
	public function gagal()
	{
		$this->load->view('test/gagal');
	}
}