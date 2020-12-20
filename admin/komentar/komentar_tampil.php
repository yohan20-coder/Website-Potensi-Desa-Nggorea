<h2 class="sub-header">Data Komentar</h2>
<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Artikel</th>
		<th>Kategori</th>
		<th>Nama</th>
		<th>No Hp</th>
		<th>Email</th>
		<th>Komentar</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	<?php 
		$no= 1;
			$tampil = mysqli_query($koneksi,"select * from komentar, artikel where komentar.id_artikel=artikel.id_artikel order by id_komentar desc") or die(mysqli_error($koneksi));
		while ($data=mysqli_fetch_array($tampil)) {
	 ?>
	 <tr>
	 	<td><?= $no; ?></td>
	 	<td><?= $data['judul'];?></td>
	 	<td><?= $data['kategori'];?></td>
	 	<td><?= $data['nama'];?></td>
	 	<td><?= $data['hp'];?></td>
	 	<td><?= $data['email'];?></td>
		<td><?= $data['komentar'];?></td>
	 	<td><?= $data['tanggal'];?></td>
	 	<td>
	 		<!-- <a href="?tampil=komentar_balas&id=<?= $data['id_komentar'];?>" class="btn btn-success btn-sm">Balas</a> -->
	 		<a href="?tampil=komentar_hapus&id=<?= $data['id_komentar'];?>" class="btn btn-danger btn-sm">Hapus</a>
	 	</td>
	 </tr>
	 <?php
	 	$no++;
	 }
	 ?>
	</tbody>
</table>