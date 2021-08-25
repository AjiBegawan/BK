<?php
class Auth extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function inputBarang($nama, $id, $merk, $kategori,  $jumlah, $tglDaftar)
    {
        $data = array(
            'nama'       => $nama,
            'idProduk'   => $id,
            'merk'       => $merk,
            'kategori'   => $kategori,
            'jumlah'     => $jumlah,
            'tglDaftar'  => $tglDaftar
        );
        $this->db->insert('produk', $data);
    }

    public function ProsesReadBarang()
	{
        $query = $this->db->get('produk')->row();
        return $query;
	}

    function getDataByUsername($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user')->row();
        return $query;
    }
}
