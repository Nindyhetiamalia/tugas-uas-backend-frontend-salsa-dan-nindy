<a href="?page=tambah_kategori" class="btn btn-info">Tambah Kategori</a>

<br>
<br>
<br>
<table class="table table-bordered table-striped table-sm data">
	<thead>
		<tr>
			<th width="50px">No</th>
			<th>Nama Kategori</th>
			<th width="150">Action</th>
		</tr>
	</thead>
	<tbody>

		<?php 

			$data = mysqli_query($koneksi,"SELECT * FROM tbl_kategori");

			$no=1;
			while ($x = mysqli_fetch_array($data)) { ?>

				<tr>
					<td><?= $no ?></td>
					<td><?= $x['nama_kategori']?></td>
					<td>
						<a class="btn btn-primary btn-sm" href="?page=edit_kategori&id=<?= $x['id_kategori']?>">edit</a>
						<a class="btn btn-danger btn-sm" href="?page=delete_kategori&id=<?= $x['id_kategori']?>"  onclick="javascript: return confirm('Yakin di hapus ?')">delete</a>
					</td>
				</tr>
			<?php 
              $no++;
		    } ?>
	</tbody>
</table>