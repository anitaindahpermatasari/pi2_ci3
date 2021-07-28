<!doctype html>
<html lang="en">

<head>
	<title>Cetak Daftar Penjualan</title>
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
	<form action="<?=site_url('penjualan/print');?>" method="POST">
	<h1>Laporan Daftar Penjualan</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal Penjualan</th>
				<th>ID Pelanggan</th>
				<th>Total Belanja</th>				
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ( !empty($result) ) {
				foreach ($allpenjualan as $no => $penjualan)
			?>
					<tr>
				<th><?=$no + 1?> </th>
					<td><?$penjualan['tgl_penjualan'];?></td>
					<td><?$penjualan['pelanggan_id'];?></td>
					<td><?$penjualan['total_belanja'];?></td>
					<td><?$penjualan['keterangan'];?></td>
					</tr>
			<?php
			} else { ?>
				<tr>
					<td colspan="5">Belum ada data pada tabel daftar penjualan.</td>
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
