<h3>Edit Kategori</h3>
<br>

<?php
	
	$id   = @$_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM tbl_kategori WHERE id_kategori = '$id'");
	$edit = mysqli_fetch_array($data);
?>
<div class="row">
	<div class="col-sm-6">
		<form method="post" action="?page=update_kategori">
			<input type="hidden" name="id" value="<?= $edit['id_kategori'] ?>">
			<div class="form-group">
				<label for="exampleInputEmail1">Nama Kategori</label>
				<input type="text" name="nama" class="form-control" value="<?= $edit['nama_kategori'] ?>">
			</div>
			
			
			<input type="submit" value="Simpan" class="btn btn-primary">
			<a href="?page=kategori" class="btn btn-danger">Cancel</a>
		</form>
	</div>
</div>