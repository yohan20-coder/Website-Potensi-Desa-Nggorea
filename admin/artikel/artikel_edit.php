<?php 
	$tampil = mysqli_query($koneksi,"select * from artikel where id_artikel='$_GET[id]'") or die (mysqli_error($koneksi));
	$data = mysqli_fetch_array($tampil);
	$kategori = $data['kategori'];
 ?>

 <h2>Edit Artikel</h2>
 <form name="edit" method="post" action="?tampil=artikel_editproses" enctype="multipart/form-data" class="form-horizontal">
 	<input type="hidden" name="id" value="<?= $data['id_artikel'];?>">

 	<div class="form-group">
 		<label class="control-label col-md-2">Judul Artikel</label>
 	<div class="col-md-4">
 		<input type="text" name="judul" class="form-control" size="50" value="<?= $data['judul']; ?>" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Kategori</label>
 	<div class="col-md-4">
 		 <select name="kategori"  class="form-control show-tick">
                <option value="wisata dan budaya" <?php if($kategori=='wisata dan budaya'){echo "selected";} ?>>Wisata dan Budaya</option>
                <option value="tenun ikat" <?php if ($kategori=='tenun ikat') {echo "selected";} ?>>Tenun Ikat</option>
                <option value="Perikanan" <?php if ($kategori=='Perikanan') {echo "selected";} ?>>Perikanan</option>
         </select>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Gambar</label>
 	<div class="col-md-4">
 		<img src="../gambar/artikel/<?= $data['gambar']; ?>" width = "100">
 		<input type="file" name="gambar" class="form-control">
 	</div>
 	</div>


 	<div class="form-group">
 		<label class="control-label col-md-2">Isi Artikel</label>
 	<div class="col-md-10">
 		<textarea name="isi"  class="form-control" required><?= $data['isi']; ?></textarea>
 	</div>
 	</div>
 
	<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="edit" value="Edit Data" class="btn btn-primary">
 	</div>
 	</div>
 </form>
 <script>
		CKEDITOR.replace('isi');
</script>