
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Daftar Barang</title>
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
	<form action="<?=site_url('barang/print');?>" method="POST">
	<h1>Laporan Daftar Barang</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Harga Barang</th>
				<th>Stok</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ( !empty($result) ) {
				foreach ($allbarang as $no => $barang)
			?>
					<tr>
						<th><?=$no + 1?> </th>
						<td><?$barang['nama_barang'];?></td>
						<td><?$barang['harga_barang'];?></td>
						<td><?$barang['stok'];?></td>
						<td><?$barang['keterangan'];?></td>
					</tr>
			<?php
			} else { ?>
				<tr>
					<td colspan="5">Belum ada data pada tabel daftar barang.</td>
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
