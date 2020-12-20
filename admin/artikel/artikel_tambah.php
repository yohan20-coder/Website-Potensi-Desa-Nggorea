<h2 class="sub-header">Tambah Artikel</h2>

<form name="tambah" method="post" action="?tampil=artikel_tambahproses" enctype="multipart/form-data" class="form-horizontal">
	<div class="form-group">
 		<label class="control-label col-md-2">Judul Artikel</label>
 	<div class="col-md-4">
 		<input type="text" name="judul" class="form-control" size="50" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2">Kategori</label>
 	<div class="col-md-4">
 		<select name="kategori" class="form-control show-tick">
                   <option value="">-- Pilih Kategori --</option>
                    <option value="wisata dan budaya">Wisata dan Budaya</option>
                    <option value="tenun ikat">Tenun Ikat</option>
                    <option value="Perikanan">Perikanan</option>
       </select>
 	</div>
 	</div>

<div class="form-group">
 		<label class="control-label col-md-2">Gambar</label>
 	<div class="col-md-4">
 		<input type="file" name="gambar" class="form-control" required>
 	</div>
 	</div>

<div class="form-group">
 		<label class="control-label col-md-2">Isi Artikel</label>
 	<div class="col-md-10">
 		<textarea name="isi"  class="form-control" required></textarea>
 	</div>
 	</div>

<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="tambah" value="Tambah Data" class="btn btn-primary" required>
 	</div>
 	</div>
</form>
	<script>
		CKEDITOR.replace('isi');
	</script>