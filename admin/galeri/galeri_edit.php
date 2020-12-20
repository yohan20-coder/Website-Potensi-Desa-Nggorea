<?php 
	$tampil = mysqli_query($koneksi,"select * from galeri where id_galeri='$_GET[id]'") or die (mysqli_error($koneksi));
	$data = mysqli_fetch_array($tampil);
 ?>

 <h2>Edit Artikel</h2>
 <form name="edit" method="post" action="?tampil=galeri_editproses" enctype="multipart/form-data" class="form-horizontal">
 	<input type="hidden" name="id" value="<?= $data['id_galeri'];?>">
 	<div class="form-group">
 		<label class="control-label col-md-2">Judul Galeri</label>
 	<div class="col-md-4">
 		<input type="text" name="judul" class="form-control" size="50" value="<?= $data['judul']; ?>" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Gambar</label>
 	<div class="col-md-4">
 		<img src="../gambar/galeri/<?= $data['gambar']; ?>" width = "100">
 		<input type="file" name="gambar" class="form-control">
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="edit" value="Edit Data" class="btn btn-primary">
 	</div>
 	</div>
 </form>