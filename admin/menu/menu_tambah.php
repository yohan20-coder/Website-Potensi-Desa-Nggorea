<h2 class="sub-header">Tambah Menu</h2>
<form name="tambah" method="post" action="?tampil=menu_tambahproses"enctype="multipart/form-data" class="form-horizontal">
	<div class="form-group">
 		<label class="control-label col-md-2">Judul</label>
 	<div class="col-md-4">
 		<input type="text" name="judul" class="form-control" size="50" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Link</label>
 	<div class="col-md-4">
 		<input type="text" name="link" class="form-control" size="50" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Urutan</label>
 	<div class="col-md-4">
 		<input type="text" name="urutan" class="form-control" size="50" required>
 	</div>
 	</div>
	
	<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="tambah" value="Tambah Data" class="btn btn-primary" required>
 	</div>
 	</div>
</form>