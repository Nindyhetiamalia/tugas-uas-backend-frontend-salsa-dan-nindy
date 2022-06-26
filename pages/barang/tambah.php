<h3>Tambah Barang</h3>
<br>

<div class="row">
	<div class="col-sm-6">
		<form method="post" action="?page=proses_barang">
			<div class="form-group">
				<label>Nama barang</label>
				<input type="text" name="nama" class="form-control">
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<select name="kategori" class="form-control">
					<option value="" required>Pilih Kategori</option>
					<?php 
						$kategori = mysqli_query($koneksi,"SELECT * FROM tbl_kategori");
						while ($data = mysqli_fetch_array($kategori)) { ?>
						
						<option value="<?= $data['id_kategori']?>">
							<?= $data['nama_kategori']?>
						</option>

					<?php
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label>Satuan</label>
				<select name="satuan" class="form-control">
					<option value="" required>Pilih satuan</option>
					<?php 
						$satuan = mysqli_query($koneksi,"SELECT * FROM tbl_satuan");
						while ($data = mysqli_fetch_array($satuan)) { ?>
						
						<option value="<?= $data['id_satuan']?>">
							<?= $data['nama_satuan']?>
						</option>

					<?php
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label>Modal</label>
				<input type="text" onkeyup='formatRupiah(this)' name="modal" class="form-control">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" onkeyup='formatRupiah(this)' name="harga" class="form-control">
			</div>

			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control">
			</div>
			
			
			<input type="submit" value="Simpan" class="btn btn-primary">
			<a href="?page=barang" class="btn btn-danger">Cancel</a>
		</form>
	</div>
</div>

<script type="text/javascript">
    function formatRupiah(obj) {
    var angka = obj.value;
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    obj.value = rupiah;

    gettotal();
    // document.getElementById("tes").innerHTML = rupiah;
  }
  </script>