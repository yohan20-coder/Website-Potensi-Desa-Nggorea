<h2>Data Artikel</h2>

<a href="?tampil=artikel_tambah" class="btn btn-primary">Tambah Artikel</a><br><br>
<div class="table-responsive">
<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Judul Artikel</th>
		<th>Kategori</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php

	include("../lib/fungsi_tglindonesia.php");

	$no =1;
	$sql = mysqli_query($koneksi,"Select * from artikel order by id_artikel desc") or die (mysqli_error($koneksi));
		while ($data=mysqli_fetch_array($sql)) {
			$tanggal = tgl_indonesia($data['tanggal']);
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['judul']; ?></td>
		<td><?php echo $data['kategori']; ?></td>
		<td><?php echo $tanggal; ?></td>
		<td>
			<a href="?tampil=artikel_edit&id=<?=$data['id_artikel']; ?>" class="btn btn-success btn-sm">Edit</a>
			<a href="?tampil=artikel_hapus&id=<?=$data['id_artikel']; ?>" class="btn btn-danger btn-sm">Hapus</a>
		</td>
	</tr>
	
	<?php 
		$no++;
	}
	?>
	</tbody>
</table>

</script>
</div>

