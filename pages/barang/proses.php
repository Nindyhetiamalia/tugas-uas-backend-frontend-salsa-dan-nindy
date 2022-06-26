<?php 
		
	$nama = $_POST['nama'];
	$kategori = $_POST['kategori'];
	$satuan = $_POST['satuan'];
	$modal = str_replace('.','',$_POST['modal']);
	$harga = str_replace('.','',$_POST['harga']);
	$stok  = $_POST['stok'];

	mysqli_query($koneksi,"INSERT INTO tbl_barang (nama_barang,kategori,satuan,modal,harga,stok) 
							VALUES('$nama',
								   '$kategori',
								   '$satuan',
								   '$modal',
								   '$harga',
								   '$stok') ");

	header('location:?page=barang');

?>