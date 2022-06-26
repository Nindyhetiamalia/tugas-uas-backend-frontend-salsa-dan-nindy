<?php
	
	$id   = $_GET['id'];
	$data = mysqli_query($koneksi,"DELETE FROM tbl_barang WHERE id_barang = '$id'");
	
	header('location:?page=barang');
?>