<?php

class PelangganModel extends CI_Model
{
		public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }
	
	public $pelanggan_id;
	public $nama_pelanggan;
	public $no_tlp;
	public $alamat;

	public function get_all_data_pelanggan()
	{
		$query = "SELECT * FROM pelanggan";
		return $this->db->query($query)->result_array();
	}

	public function simpanpelanggan()
	{
		
	}
}
?>
