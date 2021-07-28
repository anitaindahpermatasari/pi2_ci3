
		<div class="mt-3">
			<h1 align="center">	Tambah Daftar Pelanggan</h1>
				<a class="btn btn btn-warning" href="<?= site_url('pelanggan/index') ?>">Kembali</a>
				<br><br>
			<form action="<?=site_url('pelanggan/simpanpelanggan');?>" method="POST">
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Nama Pelanggan</label>
					<div class="col-sm-10">
						<input type="text" name="nama_pelanggan" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Pelanggan">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Nomor Telepon</label>
					<div class="col-sm-10">
						<input type="text" name="no_tlp" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nomor Telepon">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Alamat">
					</div>
				</div>
				<button class="btn btn btn-info" type="submit">Submit</button>
				<button class="btn btn btn-danger" type="reset">Reset</button>
			</form>
		</div>	
