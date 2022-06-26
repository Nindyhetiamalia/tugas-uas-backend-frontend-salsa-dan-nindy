<?php 
		
	$nama = $_POST['nama'];

	mysqli_query($koneksi,"INSERT INTO tbl_satuan (nama_satuan) 
							VALUES('$nama') ");

	header('location:?page=satuan');

?>