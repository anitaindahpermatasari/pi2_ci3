
		<div class="mt-3">
			<h1 align="center">	Edit Daftar Penjualan</h1>
				<a class="btn btn btn-warning" href="<?= site_url('penjualan/index') ?>">Kembali</a>
				<br><br>
			<form action="<?=site_url('penjualan/editpenjualan');?>" method="POST">
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Tanggal Penjualan</label>
					<div class="col-sm-10">
						<input type="date" name="tgl_penjualan" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Tanggal Penjualan" value="<?=$penjualan['tgl_penjualan']?>">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">ID Pelanggan</label>
					<div class="col-sm-10">
						<select class="form-select" name="pelanggan_id" aria-label="Default select example">
							<option selected value="<?=$pelangaan['pelanggan_id']?>">-- Pilih Pelanggan --</option>
							<?php foreach ($allpelanggan as $id =>$pelanggan) { ?>
								<option value="<?= $pelanggan['pelanggan_id'] ?>"><?= $pelanggan['nama_pelanggan'] ?></option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-10">
						<input type="text" nama="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Keterangan">
					</div>
				</div>
				<button class="btn btn btn-info" type="submit">Edit</button>
				<button class="btn btn btn-danger" type="reset">Reset</button>
			</form>
		</div>	
