<h2>Data Menu</h2>

<a href="?tampil=menu_tambah" class="btn btn-primary">Tambah Menu</a><br><br>
 
<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Judul Menu</th>
		<th>Link</th>
		<th>Urutan</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no =1;
	$sql = mysqli_query($koneksi,"Select * from menu order by urutan") or die (mysqli_error($koneksi));
		while ($data=mysqli_fetch_array($sql)) {
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['judul']; ?></td>
		<td><?php echo $data['link']; ?></td>
		<td><?php echo $data['urutan']; ?></td>
		<td>
			<a href="?tampil=menu_edit&id=<?=$data['id_menu']; ?>" class="btn btn-success btn-sm">Edit</a>
			<a href="?tampil=menu_hapus&id=<?=$data['id_menu']; ?>" class="btn btn-danger btn-sm">Hapus</a>
		</td> 
	</tr>
	<?php 
		$no++;
	}
	?>
	</tbody>
</table>