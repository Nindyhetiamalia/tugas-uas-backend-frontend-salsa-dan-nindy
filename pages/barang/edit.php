<h3>Edit Barang</h3>
<br>

<?php
	
	$id   = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM tbl_barang WHERE id_barang = '$id'");
	$edit = mysqli_fetch_array($data);
?>

<div class="row">
	<div class="col-sm-6">
		<form method="post" action="?page=update_barang">
			<input type="hidden" name="id" value="<?= $edit['id_barang']?>">
			<div class="form-group">
				<label>Nama barang</label>
				<input type="text" name="nama" value="<?= $edit['nama_barang']?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<select name="kategori" class="form-control">
					<option value="" required>Pilih Kategori</option>
					<?php 
						$kategori = mysqli_query($koneksi,"SELECT * FROM tbl_kategori");
						while ($data = mysqli_fetch_array($kategori)) { ?>
						
						<option value="<?= $data['id_kategori']?>">
							<?= $data['nama_kategori']?>
						</option>

					<?php
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label>Satuan</label>
				<select name="satuan" class="form-control">
					<option value="" required>Pilih satuan</option>
					<?php 
						$satuan = mysqli_query($koneksi,"SELECT * FROM tbl_satuan");
						while ($data = mysqli_fetch_array($satuan)) { 

							?>
						
						<option value="<?= $data['id_satuan']?>">
							<?= $data['nama_satuan']?>
						</option>

					<?php
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label>Modal</label>
				<input type="text" name="modal" value="<?= $edit['modal']?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" value="<?= $edit['harga']?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" value="<?= $edit['stok']?>" class="form-control">
			</div>
			
			
			<input type="submit" value="Simpan" class="btn btn-primary">
			<a href="?page=barang" class="btn btn-danger">Cancel</a>
		</form>
	</div>
</div>