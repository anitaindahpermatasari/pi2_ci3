<!doctype html>
<html lang="en">

<head>
	<title>Cetak Daftar Pelanggan</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, 
		td {
			padding: 15px;
		}
	</style>
</head>
<br><br><br><br>
<body>
	<form action="<?=site_url('pelanggan/print');?>" method="POST">
	<h1>Laporan Daftar Pelanggan</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Nomor Telepon</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ( !empty($result) ) {
				foreach ($allpelanggan as $no => $pelanggan)
			?>
					<tr>
				<th><?=$no + 1?> </th>
					<td><?$pelanggan['nama_pelanggan'];?></td>
					<td><?$pelanggan['no_tlp'];?></td>
					<td><?$pelanggan['alamat'];?></td>
					</tr>
			<?php
			} else { ?>
				<tr>
					<td colspan="4">Belum ada data pada tabel daftar pelanggan.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	</form>
	<script>
		window.print();
	</script>
</body>

</html>
