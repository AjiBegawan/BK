<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUDBarang extends CI_Controller
{
	function prosesInputBarang()
	{
		$this->load->model("Auth", "", TRUE);

		$this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('id', 'id', 'trim|required|min_length[1]|max_length[255]');

		if ($this->form_validation->run() == true) {
			$id = $this->input->post("id");
			$nama = $this->input->post("nama");
			$merk = $this->input->post("merk");
			$kategori = $this->input->post("kategori");
			$jumlah = $this->input->post("jumlah");
			$tglDaftar = "%Y-%m-%d";;

			$query = $this->db->where('IdProduk', $id);
			$result = $this->db->get('produk');
			$row = $result->row();

			if (!isset($row)) {
				$this->Auth->inputBarang($nama, $id, $merk, $kategori,  $jumlah, $tglDaftar);
				// $this->session->set_flashdata('message', 'Proses Pendaftaran User Berhasil');
				redirect(site_url('pageTest'));
			} else {
				// $this->session->set_flashdata('error', 'Username telah terdaftar');
				redirect(site_url('pageTest/gagal'));
			}
		} else {
			//  $this->session->set_flashdata('error', validation_errors());
			// $this->session->set_flashdata('error', 'Username telah terdaftar');
			redirect(site_url('home'));
		}
	}


}
