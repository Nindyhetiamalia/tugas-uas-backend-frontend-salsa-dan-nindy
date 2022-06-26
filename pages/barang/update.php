<?php 
	
	$id   = $_POST['id'];
	$nama = $_POST['nama'];
	$kategori = $_POST['kategori'];
	$satuan = $_POST['satuan'];
	$modal = $_POST['modal'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];

	mysqli_query($koneksi,"UPDATE tbl_barang SET nama_barang = '$nama',
												 kategori = '$kategori',
												 satuan = '$satuan',
												 modal = '$modal',
												 harga = '$harga',
												 stok  = '$stok'
										WHERE id_barang = '$id' ");

	header('location:?page=barang');

?>