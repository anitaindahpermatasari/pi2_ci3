	<div class="row mt-3">
		<div class="col-3">
			<!-- Button trigger modal -->
			<a href="<?=site_url('penjualan_detail/proses/'. $penjualan['penjualan_id'])?>" button type="button" class="btn btn-primary">
			Tambah Data
			</a>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-3">
			<a href="<?= site_url('penjualan/print');?>" target="_blank" type="button" class="btn btn-info">Cetak Data</a>
		</div>
	</div>
	<table class=" table mt-3 table-hover table-info">
		<thead>
			<tr class="table-primary">
				<th scope="col">No</th>
				<th scope="col">ID Penjualan Detail</th>
				<th scope="col">ID Penjualan</th>
				<th scope="col">ID Barang</th>
				<th scope="col">Harga Total</th>
				<th scope="col">Jumlah</th>
				<th scope="col">Diskon</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
	<tbody>
		<?php
		foreach ($penjualan_detail as $no => $p)
		{
		?>
			<tr>
				<th scope="row"><?=$no + 1?> </th>
					<td><?$p['penjualan_detail_id'];?></td>
					<td><?$p['penjualan_id'];?></td>
					<td><?$p['barang_id'];?></td>
					<td><?$p['harga_total'];?></td>
					<td><?$p['jumlah'];?></td>
					<td><?$p['diskon'];?></td>
					<td>
						<a href="<?=site_url('penjualan_detail/hapus/' . $p['penjualan_id'] . '/' . $p['penjualan_detail_id'])?>" class="btn btn-danger">Hapus</a>
					</td>
			</tr>
		<?php
		}
		?>
	</tbody>
	</table>

	<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Penjualan<?=date('Y-m-d')?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			<form action="<?=site_url('penjualan/simpanpenjualan');?>" method="POST">
			<input type="hidden" name="tgl_penjualan" value="<?=date('Y-m-d')?>">
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">ID Pelanggan</label>
					<div class="col-sm-10">
						<select class="form-select" name="pelanggan_id" aria-label="Default select example">
							<option selected>-- Pilih Pelanggan --</option>
							<?php foreach ($allpelanggan as $id =>$pelanggan) { ?>
								<option value="<?= $pelanggan['pelanggan_id'] ?>"><?= $pelanggan['nama_pelanggan'] ?></option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-10">
						<input type="text" name="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Keterangan">
					</div>
				</div>
				
      </div>
    </div>
  </div>
</div>
