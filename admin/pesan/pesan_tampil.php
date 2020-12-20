<h2 class="sub-header">Data Pesan</h2>
<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Isi Pesan</th>
		<th>Tanggal</th>
		<!-- <th>Status</th> -->
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	<?php 
		$no= 1;
		$tampil = mysqli_query($koneksi,"select * from pesan") or die(mysqli_error($koneksi));
		while ($data=mysqli_fetch_array($tampil)) {
	 ?>
	 <tr>
	 	<td><?= $no; ?></td>
	 	<td><?= $data['nama'];?></td>
	 	<td><?= $data['email'];?></td>
	 	<td><?= $data['pesan'];?></td>
	 	<td><?= $data['tanggal'];?></td>
	 	<!-- <td><?= $data['status'];?></td> -->
	 	<td>
	 		<!-- <a href="?tampil=pesan_balas&id=<?= $data['id_pesan'];?>" class="btn btn-success btn-sm">Balas</a> -->
	 		<a href="?tampil=pesan_hapus&id=<?= $data['id_pesan'];?>" class="btn btn-danger btn-sm">Hapus</a>
	 	</td>
	 </tr>
	 <?php
	 	$no++;
	 }
	 ?>
	</tbody>
</table>