<a href="?page=tambah_barang" class="btn btn-info">Tambah Barang</a>

<br>
<br>
<br>
<table class="table table-bordered table-striped table-sm">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Satuan</th>
			<th>Modal</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php 

			$data = mysqli_query($koneksi,"SELECT a.id_barang,
			                                      a.nama_barang,
												  b.nama_kategori,
												  c.nama_satuan,
												  a.modal,
												  a.harga,
												  a.stok
											FROM tbl_barang a
											LEFT JOIN tbl_kategori b ON b.id_kategori =  a.kategori
											LEFT JOIN tbl_satuan c   ON c.id_satuan   =  a.satuan");

			$no=1;
			while ($x = mysqli_fetch_array($data)) { ?>

				<tr>
					<td><?= $no ?></td>
					<td><?= $x['nama_barang']?></td>
					<td><?= $x['nama_kategori']?></td>
					<td><?= $x['nama_satuan']?></td>
					<td><?= number_format($x['modal'],0,",",".")?></td>
					<td><?= number_format($x['harga'],0,",",".")?></td>
					<td><?= $x['stok']?></td>
					<td>
						<a class="btn btn-primary btn-sm" href="?page=edit_barang&id=<?= $x['id_barang']?>">edit</a>
						<a class="btn btn-danger btn-sm" href="?page=delete_barang&id=<?= $x['id_barang']?>" onclick="javascript: return confirm('Yakin di hapus ?')">delete</a>
					</td>
				</tr>
			<?php 
              $no++;
		    } ?>
	</tbody>
</table>