<h3>Edit satuan</h3>
<br>

<?php
	
	$id   = @$_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM tbl_satuan WHERE id_satuan = '$id'");
	$edit = mysqli_fetch_array($data);
?>
<div class="row">
	<div class="col-sm-6">
		<form method="post" action="?page=update_satuan">
			<input type="hidden" name="id" value="<?= $edit['id_satuan'] ?>">
			<div class="form-group">
				<label for="exampleInputEmail1">Nama satuan</label>
				<input type="text" name="nama" class="form-control" value="<?= $edit['nama_satuan'] ?>">
			</div>
			
			
			<input type="submit" value="Simpan" class="btn btn-primary">
			<a href="?page=satuan" class="btn btn-danger">Cancel</a>
		</form>
	</div>
</div>