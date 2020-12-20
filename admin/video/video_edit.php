<?php 
$tampil = mysqli_query($koneksi,"select * from video where id_video='$_GET[id]'") or die (mysqli_error($koneksi));
$data = mysqli_fetch_array($tampil);
 ?>

 <h2>Edit Video</h2>
 <form name="edit" method="post" action="?tampil=video_editproses" enctype="multipart/form-data" class="form-horizontal">
 	<input type="hidden" name="id" value="<?= $data['id_video'];?>">
 	<div class="form-group">
 		<label class="control-label col-md-2">Judul Video</label>
 	<div class="col-md-4">
 		<input type="text" name="judul" class="form-control" size="50" value="<?= $data['nama']; ?>" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Video</label>
 	<div class="col-md-4">
 		<video src="../media/<?= $data['video'];?>" width="120" controls></video>
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