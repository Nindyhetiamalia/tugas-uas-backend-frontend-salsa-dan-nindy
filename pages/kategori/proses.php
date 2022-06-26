<?php 
		
	$nama = $_POST['nama'];

	mysqli_query($koneksi,"INSERT INTO tbl_kategori (nama_kategori) 
							VALUES('$nama') ");

	header('location:?page=kategori');

?>