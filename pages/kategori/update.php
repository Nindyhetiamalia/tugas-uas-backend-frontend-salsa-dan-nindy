<?php 
	
	$id   = $_POST['id'];
	$nama = $_POST['nama'];

	mysqli_query($koneksi,"UPDATE tbl_kategori SET nama_kategori = '$nama'
										WHERE id_kategori = '$id' ");

	header('location:?page=kategori');

?>