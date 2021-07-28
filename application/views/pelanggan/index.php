	<div class="row mt-3">
		<div class="col-3">
			<a href="<?= site_url('pelanggan/create');?>" type="button" class="btn btn-success">Tambah Data</a>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-3">
			<a href="<?= site_url('pelanggan/print');?>" target="_blank" type="button" class="btn btn-info">Cetak Data</a>
		</div>
	</div>
	<table class=" table mt-3 table-hover table-info ">
		<thead>
			<tr class="table-primary">
				<th scope="col">No</th>
				<th scope="col">Nama Pelanggan</th>
				<th scope="col">Nomor Telepon</th>
				<th scope="col">Alamat</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
	<tbody>
		<?php
		foreach ($allpelanggan as $no => $pelanggan)
		{
		?>
			<tr>
				<th scope="row"><?=$no + 1?> </th>
					<td><?$pelanggan['nama_pelanggan'];?></td>
					<td><?$pelanggan['no_tlp'];?></td>
					<td><?$pelanggan['alamat'];?></td>
					<td>
						<a href="<?=site_url('pelanggan/edit/' . $pelanggan['pelanggan_id'])?>" class="btn btn-warning">Edit</a>
						<a href="<?=site_url('pelanggan/hapus/' . $pelanggan['pelanggan_id'])?>" class="btn btn-danger">Hapus</a>
					</td>
			</tr>
		<?php
		}
		?>
	</tbody>
	</table>

