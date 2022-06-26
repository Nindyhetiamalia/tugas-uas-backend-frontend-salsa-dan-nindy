<?php 
	
	$id   = $_POST['id'];
	$nama = $_POST['nama'];

	mysqli_query($koneksi,"UPDATE tbl_satuan SET nama_satuan = '$nama'
										WHERE id_satuan = '$id' ");

	header('location:?page=satuan');

?>