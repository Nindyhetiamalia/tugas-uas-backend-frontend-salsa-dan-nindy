<?php
	
	$id   = @$_GET['id'];
	$data = mysqli_query($koneksi,"DELETE FROM tbl_kategori WHERE id_kategori = '$id'");
	
	header('location:?page=kategori');
?>