	<div class="row mt-3">
		<div class="col-3">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
			Tambah Data
			</button>
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
				<th scope="col">Tanggal Penjualan</th>
				<th scope="col">ID Pelanggan</th>
				<th scope="col">Total Belanja</th>				
				<th scope="col">Keterangan</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
	<tbody>
		<?php
		foreach ($allpenjualan as $no => $penjualan)
		{
		?>
			<tr>
				<th scope="row"><?=$no + 1?> </th>
					<td><?$penjualan['tgl_penjualan'];?></td>
					<td><?$penjualan['pelanggan_id'];?></td>
					<td><?$penjualan['total_belanja'];?></td>
					<td><?$penjualan['keterangan'];?></td>
					<td>
						<a href="<?=site_url('penjualan/detail/' . $penjualan['penjualan_id'])?>" class="btn btn-warning">Detail</a>
						<a href="<?=site_url('penjualan/hapus/' . $penjualan['penjualan_id'])?>" class="btn btn-danger">Hapus</a>
					</td>
			</tr>
		<?php
		}
		?>
	</tbody>
	</table>
