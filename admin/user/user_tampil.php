<h2>Data User</h2>

<a href="?tampil=user_tambah" class="btn btn-primary">Tambah User</a><br><br>
<div class="table-responsive">
<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Username</th>
		<th>Password</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no =1;
	$sql = mysqli_query($koneksi,"Select * from user order by id_user desc") or die (mysqli_error($koneksi));
		while ($data=mysqli_fetch_array($sql)) {
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['password']; ?></td>
		<td>
			<a href="?tampil=user_edit&id=<?=$data['id_user']; ?>" class="btn btn-success btn-sm">Edit</a>
			<a href="?tampil=user_hapus&id=<?=$data['id_user']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
	