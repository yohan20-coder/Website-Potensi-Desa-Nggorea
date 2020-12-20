<h2 class="sub-hedaer">Tambah Galeri</h2>
<form name="tambah" method="post" action="?tampil=galeri_tambahproses" enctype="multipart/form-data" class="form-horizontal">
	<div class="form-group">
 		<label class="control-label col-md-2">Judul Galeri</label>
 	<div class="col-md-4">
 		<input type="text" name="judul" class="form-control" size="50" required>
 	</div>
 	</div>

	<div class="form-group">
 		<label class="control-label col-md-2">Gambar</label>
 	<div class="col-md-4">
 		<input type="file" name="gambar" class="form-control" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="tambah" value="Tambah Data" class="btn btn-primary" required>
 	</div>
 	</div>
</form>