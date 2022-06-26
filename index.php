<?php 
	include"config/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/DataTables/js/jquery.js"></script>
<script type="text/javascript" src="assets/DataTables/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="assets/DataTablescss/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="assets/DataTables/css/dataTables.bootstrap.css">
	<title>Inventori</title>

	<style type="text/css">
		body{
			font-family: Arial;
		}
	</style>
</head>
<body>
		<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<span style="font-size: 40px;">Sistem Inventori</span>
						<br>
					</div>
				</div>


				<div class="row">
					<div class="col-sm-12">
						<nav class="navbar navbar-expand-lg navbar-light bg-primary">
							<a class="navbar-brand" href="#">Home</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarText">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item">
										<a class="nav-link" href="?page=kategori">Kategori</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="?page=satuan">Satuan</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="?page=barang">Data Barang</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				<br>
				<br>

				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							
							<div class="card-body">
									
									<?php 

										if(isset($_GET['page'])){
											$page = $_GET['page'];

											
											switch ($page) {
													case 'kategori':
														include"pages/kategori/view.php";
														break;

													case 'tambah_kategori':
														include"pages/kategori/tambah.php";
														break;

													case 'proses_kategori':
														include"pages/kategori/proses.php";
														break;

												    case 'edit_kategori':
														include"pages/kategori/edit.php";
														break;

													 case 'update_kategori':
														include"pages/kategori/update.php";
														break;

													 case 'delete_kategori':
														include"pages/kategori/delete.php";
														break;


												 	 case 'satuan':
														include"pages/satuan/view.php";
														break;

													case 'tambah_satuan':
														include"pages/satuan/tambah.php";
														break;

													case 'proses_satuan':
														include"pages/satuan/proses.php";
														break;

												    case 'edit_satuan':
														include"pages/satuan/edit.php";
														break;

													 case 'update_satuan':
														include"pages/satuan/update.php";
														break;

													 case 'delete_satuan':
														include"pages/satuan/delete.php";
														break;

													case 'barang':
														include"pages/barang/view.php";
														break;

													case 'tambah_barang':
														include"pages/barang/tambah.php";
														break;

													case 'proses_barang':
														include"pages/barang/proses.php";
														break;

												    case 'edit_barang':
														include"pages/barang/edit.php";
														break;

													 case 'update_barang':
														include"pages/barang/update.php";
														break;

													 case 'delete_barang':
														include"pages/barang/delete.php";
														break;
													

													default:
														// code...
														break;
												}	

										}else{
											include"pages/home.php";
										}


									?>

							</div>
						</div>
					</div>
				</div>

		</div>




</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</html>