<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangModel extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

	public $barang_id;
	public $nama_barang;
	public $harga_barang;
	public $stok;
	public $keterangan;

	public function get_all_data_barang()
	{
		$query = "SELECT * FROM barang";
		return $this->db->query($query)->result_array();
	}
}
?>
