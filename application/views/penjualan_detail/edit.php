
		<div class="mt-3">
			<h1 align="center">	Edit Daftar Penjualan Detail</h1>
				<a class="btn btn btn-warning" href="<?= site_url('penjualan_detail/index') ?>">Kembali</a>
				<br><br>
			<form action="<?=site_url('penjualan_detail/editpenjualan_detail');?>" method="POST">
			<input type="hidden" name="penjualan_id" value="<?=$penjualan['penjualan_id']?>">
				<div class="mb-3 row">
					<label for=" exampleFormCont rolInput1" class="col-sm-2 col-form-label">ID Penjualan Detail</label>
					<div class="col-sm-10">
						<input type="number" name="penjualan_detail_id" class="form-control" id="exampleFormControlInput1" placeholder="Masukan ID Penjualan Detail">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">ID Penjualan</label>
					<div class="col-sm-10">
						<input type="text" name="penjualan_id" class="form-control" id="exampleFormControlInput1" placeholder="Masukan ID Penjualan">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">ID Barang</label>
					<div class="col-sm-10">
						<select class="form-select" name="barang_id" aria-label="Default select example">
							<option selected value="<?=$pelangaan['pelanggan_id']?>">-- Pilih Barang --</option>
							<?php foreach ($allbarang as $id =>$barang) { ?>
								<option value="<?= $barang['barang_id'] ?>"><?= $barang['nama_barang']?> . <?= $barang['harga_barang']?></option>
							<?php }?>
						</select>
					</div>
				</div> 
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Jumlah</label>
					<div class="col-sm-10">
						<input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Jumlah">
					</div>
				</div>
				<div class="mb-3 row">
					<label for=" exampleFormControlInput1" class="col-sm-2 col-form-label">Diskon</label>
					<div class="col-sm-10">
						<input type="number" name="diskon" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Diskon" value="0">
					</div>
				</div>
				<button class="btn btn btn-info" type="submit">Edit</button>
				<button class="btn btn btn-danger" type="reset">Reset</button>
			</form>
		</div>	
