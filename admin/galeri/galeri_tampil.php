<h2 class="sub-header">Data Galeri</h2>

<a href="?tampil=galeri_tambah" class="btn btn-primary">Tambah Galeri</a><br><br>

<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Foto</th>
		<th>Judul</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no =1;
	$tampil = mysqli_query($koneksi,"select * from galeri") or die (mysqli_error($koneksi));
		while ($data=mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><img src="../gambar/galeri/<?= $data['gambar'];?>" width="100"></td>
		<td><?php echo $data['judul']; ?></td>
		<td><?php echo $data['tanggal']; ?></td>
		<td>
			<a href="?tampil=galeri_edit&id=<?=$data['id_galeri']; ?>" class="btn btn-success btn-sm">Edit</a>
			<a href="?tampil=galeri_hapus&id=<?=$data['id_galeri']; ?>" class="btn btn-danger btn-sm">Hapus</a>
		</td>
	</tr>
	<?php 
		$no++;
	}
	?>
	</tbody>
</table>