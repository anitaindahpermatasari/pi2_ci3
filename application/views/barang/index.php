
	<div class="row mt-3">
		<div class="col-3">
			<a href="<?= site_url('barang/create');?>" type="button" class="btn btn-success">Tambah Data</a>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-3">
			<a href="<?= site_url('barang/print');?>" target="_blank" type="button" class="btn btn-info">Cetak Data</a>
		</div>
	</div>
	<table class=" table mt-3 table-info">
		<thead>
			<tr class="table-primary">
				<th scope="col">No</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Harga Barang</th>
				<th scope="col">Stok</th>
				<th scope="col">Keterangan</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
	<tbody>
		<?php
		foreach ($allbarang as $no => $barang)
		{
		?>
			<tr>
				<th scope="row"><?=$no + 1?> </th>
					<td><?$barang['nama_barang'];?></td>
					<td><?$barang['harga_barang'];?></td>
					<td><?$barang['stok'];?></td>
					<td><?$barang['keterangan'];?></td>
					<td>
						<a href="<?=site_url('barang/edit/' . $barang['barang_id'])?>" class="btn btn-warning">Edit</a>
						<a href="<?=site_url('barang/hapus/' . $barang['barang_id'])?>" class="btn btn-danger">Hapus</a>
					</td>
			</tr>
		<?php
		}
		?>
	</tbody>
	</table>
