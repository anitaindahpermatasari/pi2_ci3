
		<div class="mt-3">
			<h1 align="center">	Edit Daftar Barang</h1>
				<a class="btn btn btn-warning" href="<?= site_url('barang/index') ?>">Kembali</a>
				<br><br>
			<form action="<?=site_url('barang/editbarang');?>" method="POST">
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">ID Barang</label>
					<div class="col-sm-10">
						<input type="number" name="barang_id" class="form-control" id="exampleFormControlInput1" placeholder="Masukan ID Barang" value="<?=$barang['barang_id']?>">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Nama Barang</label>
					<div class="col-sm-10">
						<input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Barang" value="<?=$barang['nama_barang']?>">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Harga Barang</label>
					<div class="col-sm-10">
						<input type="number" nama="harga_barang" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Harga Barang" value="<?=$barang['harga_barang']?>">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Stok</label>
					<div class="col-sm-10">
						<input type="number" nama="stok" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Stok Barang" value="<?=$barang['stok']?>">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-10">
						<input type="text" nama="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Keterangan" value="<?=$barang['keterangan']?>">
					</div>
				</div>
				<button class="btn btn btn-info" type="submit">Edit</button>
				<button class="btn btn btn-danger" type="reset">Reset</button>
			</form>
		</div>	
