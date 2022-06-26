<a href="?page=tambah_satuan" class="btn btn-info">Tambah Satuan</a>

<br>
<br>
<br>
<table class="table table-bordered table-striped table-sm data">
	<thead>
		<tr>
			<th width="50px">No</th>
			<th>Nama Satuan</th>
			<th width="150px">Action</th>
		</tr>
	</thead>
	<tbody>

		<?php 

			$data = mysqli_query($koneksi,"SELECT * FROM tbl_satuan");

			$no=1;
			while ($x = mysqli_fetch_array($data)) { ?>

				<tr>
					<td><?= $no ?></td>
					<td><?= $x['nama_satuan']?></td>
					<td>
						<a class="btn btn-primary btn-sm" href="?page=edit_satuan&id=<?= $x['id_satuan']?>">edit</a>
						<a class="btn btn-danger btn-sm" href="?page=delete_satuan&id=<?= $x['id_satuan']?>" onclick="javascript: return confirm('Yakin di hapus ?')">delete</a>
					</td>
				</tr>
			<?php 
              $no++;
		    } ?>
	</tbody>
</table>