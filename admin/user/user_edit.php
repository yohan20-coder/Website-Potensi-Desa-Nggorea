<?php 
	$sql = mysqli_query($koneksi,"select * from user where id_user='$_GET[id]'") or die (mysqli_error($koneksi));
	$data = mysqli_fetch_array($sql);
 ?>

 <h2>Edit User</h2>
 <form name="edit" method="post" action="?tampil=user_editproses" enctype="multipart/form-data"class="form-horizontal">
 	<input type="hidden" name="id" value="<?= $data['id_user'];?>">
 	<div class="form-group">
 		<label class="control-label col-md-2">Nama</label>
 	<div class="col-md-4">
 		<input type="text" name="nama" class="form-control" size="50" value="<?= $data['nama']; ?>">
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Username</label>
 	<div class="col-md-4">
 		<input type="text" name="username" class="form-control" size="50" value="<?= $data['username']; ?>">
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Ganti Password</label>
 	<div class="col-md-4">
 		<input type="text" name="password" class="form-control" size="50"  value="<?= $data['password']; ?>">
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Ulang Password</label>
 	<div class="col-md-4">
 		<input type="text" name="password_ulang" class="form-control" size="50">
 	</div>
 	</div>
	
	<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="edit" value="Edit Data" class="btn btn-primary" required>
 	</div>
 	</div>
	
 </form>