<?php 
	$tampil = mysqli_query($koneksi,"select * from pesan where id_pesan='$_GET[id]'") or die (mysqli_error($koneksi));
	$data = mysqli_fetch_array($tampil);
 ?>

 <h2>Balas Pesan</h2>
 <form name="edit" method="post" action="?tampil=pesan_balasproses" enctype="multipart/form-data" class="form-horizontal">
 	<input type="hidden" name="id" value="<?= $data['id_pesan'];?>">
 	<div class="form-group">
 		<label class="control-label col-md-2">Kepada</label>
 	<div class="col-md-4">
 		<input type="text" name="email" class="form-control" size="50" value="<?= $data['email']; ?>" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Subjek</label>
 	<div class="col-md-4">
 		<input type="text" name="subjek" class="form-control" size="50" value="<?= $data['subjek']; ?>" required>
 	</div>
 	</div>

 	
 	<div class="form-group">
 		<label class="control-label col-md-2">Balas Pesan</label>
 	<div class="col-md-10">
 		<textarea name="balas" cols="80"  rows="15" class="form-control" required><?= $data['balasan']; ?></textarea>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="edit" value="Balas" class="btn btn-primary">
 	</div>
 	</div>
 </form>