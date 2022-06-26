<?php
	
	$id   = @$_GET['id'];
	$data = mysqli_query($koneksi,"DELETE FROM tbl_satuan WHERE id_satuan = '$id'");
	
	header('location:?page=satuan');
?>