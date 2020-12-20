<?php 
	$sql = mysqli_query($koneksi,"select * from menu where id_menu='$_GET[id]'") or die (mysqli_error());
	$data = mysqli_fetch_array($sql);
?>

<h2>Edit Menu</h2>
<form name="edit" method="post" action="?tampil=menu_editproses" enctype="multipart/form-data"class="form-horizontal">
	<input type="hidden" name="id" value="<?=$data['id_menu'];?>">

	<div class="form-group">
 		<label class="control-label col-md-2">Judul</label>
 	<div class="col-md-4">
 		<input type="text" name="judul" class="form-control" size="50" value="<?= $data ['judul'];?>">
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Link</label>
 	<div class="col-md-4">
 		<input type="text" name="link" class="form-control" size="50" value="<?= $data ['link'];?>">
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Urutan</label>
 	<div class="col-md-4">
 		<input type="text" name="urutan" class="form-control" size="50" value="<?= $data ['urutan'];?>">
 	</div>
 	</div>
	
	<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="edit" value="Edit Data" class="btn btn-primary" required>
 	</div>
 	</div>
	
</form>