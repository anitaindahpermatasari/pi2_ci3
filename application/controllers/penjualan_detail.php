<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjualan_detail extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
		$this->load->helper('url');	
		$this->load->model('PenjualanModel');
		$this->load->model('PelangganModel');
		$this->load->model('BarangModel');
    }
	public function proses($penjualan_id)
	{
		$data['penjualan'] = $this->db->get_where('penjualan', ['penjualan_id'-> $penjualan_id])->row_array();
		$data['allpelanggan'] = $this->PelangganModel->get_all_data_pelanggan();
		$data['allbarang'] = $this->BarangModel->get_all_data_barang();
		
		$data['title'] = "Detail Penjualan";

		$this->load->view('templates/header', $data);
		$this->load->view('penjualan_detail/create', $data);
		$this->load->view('templates/footer');
	}
	public function simpanpenjualan_detail()
	{
		$barang = $this->db->get_where('barang', ['barang_id'=> $this->input->post('barang_id')])->row_array();

		if($this->input->post('diskon') != 0) {
			$harga = $barang['harga_barang'] * $this->input->post('jumlah') * $this->input->post('diskon') / 100;
			$harga_total = $barang['harga_barang'] * $this->input->post('jumlah') - $harga;
		} else{
			$harga_total = $barang['harga_barang'] * $this->input->post('jumlah');
		}

		//proses update grand total
		$barang = $this->db->get_where('penjualan_detail', ['penjualan_id'=> $this->input->post('penjualan_id')])->row_array();
	
		$grandtotal = $barang['harga_total'] + $harga_total;
		$this->db->set('total_belanja', $grandtotal);
		$this->db->where('penjualan_id', $this->input->post('penjualan_id'));
		$this->db->update('penjualan');


		$data = [
			'penjualan_id' => $this->input->post('penjualan_id'),
			'barang_id' => $this->input->post('barang_id'),
			'jumlah' => $this->input->post('jumlah'),
			'diskon' => $this->input->post('diskon'),
			'harga_total' => $harga_total,
		];
		$this->db->insert('penjualan_detail', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    <strong>Selamat</strong>Penjualan Telah Berhasil Di Tambahkan.
  </div>
</div>');

		redirect('penjualan/detail/' . $this->input->post('penjualan_id'));
	}
	public function hapus($penjualan_id, $penjualan_detail_id)
	{
		//proses update grand total
		$pnjd = $this->db->get_where('penjualan_detail', ['penjualan_detail_id'=> $penjualan_detail_id])->row_array();
		$pnj = $this->db->get_where('penjualan', ['penjualan_id'=> $penjualan_id])->row_array();
	
		$grandtotal = $pnj['total_belanja'] - $pnjd['harga_total'];
		$this->db->set('total_belanja', $grandtotal);
		$this->db->where('penjualan_id', $penjualan_id);
		$this->db->update('penjualan');

		$this->db->where('penjualan_detail_id', $penjualan_detail_id);
		$this->db->delete('penjualan_detail');

		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    <strong>Selamat</strong>Penjualan Telah Berhasil Di Hapus.
  </div>
</div>');

		redirect('penjualan'); 
	}
}
?>
