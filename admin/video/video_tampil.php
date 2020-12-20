<h2 class="sub-header">Data video</h2>

<!--<a href="?tampil=video_tambah" class="btn btn-primary">Tambah video</a><br><br>-->

<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>video</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no =1;
	$tampil = mysqli_query($koneksi,"select * from video") or die (mysqli_error($koneksi));
		while ($data=mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><video src="../media/<?= $data['video'];?>" width="120" controls></td>
		<td>
			<a href="?tampil=video_edit&id=<?=$data['id_video']; ?>" class="btn btn-success btn-sm">Edit</a>
		</td>
	</tr>
	<?php 
		$no++;
	}
	?>
	</tbody>
</table>