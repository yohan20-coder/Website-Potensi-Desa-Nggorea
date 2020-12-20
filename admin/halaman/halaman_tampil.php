<h2>Data Halaman</h2>
<!-- <a href="?tampil=halaman_tambah" class="btn btn-primary">Tambah Halaman</a><br><br> -->
<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Judul Halaman</th>
		<th>Link Halaman</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php 
		$no=1;
		$tampil = mysqli_query($koneksi,"select * from halaman") or die (mysqli_error($koneksi));
		while($data=mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $data['judul']; ?></td>
		<td>?tampil=halaman&id=<?= $data['id_halaman']; ?></td>
		<td>
			<a href="?tampil=halaman_edit&id=<?= $data['id_halaman'];?>" class="btn btn-success btn-sm">Edit</a>
			<!-- <a href="?tampil=halaman_hapus&id=<?= $data['id_halaman'];?>" class="btn btn-danger btn-sm">Hapus</a> -->
		</td>
	</tr>
	<?php 
		$no++;
		}
	?>
	</tbody>
</table>
