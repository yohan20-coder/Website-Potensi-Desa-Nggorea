<?php
	if(!defined("INDEX")) die("---");
?>

<h2>Data Sub Menu</h2>

<a href="?tampil=submenu_tambah" class="btn btn-primary">Tambah Sub Menu</a><br><br>

<table class="table table-bordered table-striped" id="aku">
	<thead>
	<tr>
		<th>No</th>
		<th>Judul Sub Menu</th>
		<th>Induk</th>
		<th>Link</th>
		<th>Urutan</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no =1;
	$sql = mysqli_query($koneksi,"Select * from submenu order by urutan") or die (mysqli_error($koneksi));
		while ($data=mysqli_fetch_array($sql)) {
		$sqlmenu = mysqli_query($koneksi,"select * from menu where id_menu='$data[id_menu]'");
		$datamenu = mysqli_fetch_array($sqlmenu);
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['judul']; ?></td>
		<td><?php echo $datamenu['judul']; ?></td>
		<td><?php echo $data['link']; ?></td>
		<td><?php echo $data['urutan']; ?></td>
		<td>
			<a href="?tampil=submenu_edit&id=<?=$data['id_submenu']; ?>" class="btn btn-success btn-sm">Edit</a>
			<a href="?tampil=submenu_hapus&id=<?=$data['id_submenu']; ?>" class="btn btn-danger btn-sm">Hapus</a>
		</td>
	</tr>
	<?php 
		$no++;
	}
	?>
	</tbody>
</table>