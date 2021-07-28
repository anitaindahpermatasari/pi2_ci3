
		<div class="mt-3">
			<h1 align="center">	Tambah Daftar Barang</h1>
				<a class="btn btn btn-warning" href="<?= site_url('barang/index') ?>">Kembali</a>
				<br><br>
			<form action="<?=site_url('barang/simpanbarang');?>" method="POST">
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Nama Barang</label>
					<div class="col-sm-10">
						<input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Barang">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Harga Barang</label>
					<div class="col-sm-10">
						<input type="number" name="harga_barang" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Harga Barang">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Stok</label>
					<div class="col-sm-10">
						<input type="number" name="stok" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Stok Barang">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-10">
						<input type="text" name="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Keterangan">
					</div>
				</div>
				<button class="btn btn btn-info" type="submit">Submit</button>
				<button class="btn btn btn-danger" type="reset">Reset</button>
			</form>
		</div>	
