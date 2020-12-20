<?php 
	if(!defined("INDEX")) die("---");

	mysqli_query($koneksi,"update artikel set hits=hits+1 where id_artikel = '$_GET[id]'");

	$artikel = mysqli_query($koneksi,"select * from artikel where id_artikel ='$_GET[id]'");
	$data = mysqli_fetch_array($artikel);
	$isi = $data['isi'];
 ?>
 <div class="artikel">
 	<h2 class="judul"><?= $data['judul']; ?></h2>
 	
 		<?php if($data['gambar']!="") ?>
 		<img src="gambar/artikel/<?= $data['gambar'];?>" class ="gambar-artikel" width="350">
 	<p>
 		<?= $isi; ?>
 	</p>
 </div>

 <!--bagian 1 /-->
<?php
	$komentar = mysqli_query($koneksi,"select * from komentar where id_artikel = '$_GET[id]'");
	$jumlahkomentar = mysqli_num_rows($komentar);
?>
	<h3><?= $jumlahkomentar; ?> Komentar</h3>
	<hr>
<?php
	while($datakomen = mysqli_fetch_array($komentar)){
?>
<div class="komentar">
	<ul class="breadcrumb">
	<li><b><?= $datakomen['nama'];?> - <?= $datakomen['tanggal'];?></b></li>
	<li class="active"><b></b></li><hr>
	<p><?= $datakomen['komentar'];?></p>
</ul>
</div>
<?php
	}
?>

 <!--bagian 2 /-->
 <h3>Isi Komentar</h3>
 <form method="post" action="?tampil=komentar_proses" id="formkomentar" class="form-horizontal well">
 	<input type="hidden" name="id" value="<?= $data['id_artikel'];?>">
 	<div class="form-group">
 		<label for="nama" class="control-label col-md-2">Nama</label>
 	<div class="col-md-10">
 		<input type="text" name="nama" id="nama" class="form-control" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label for="hp" class="control-label col-md-2">No.Hp</label>
 	<div class="col-md-10">
 		<input type="text" name="hp" id="nama" class="form-control" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label for="email" class="control-label col-md-2">Email</label>
 	<div class="col-md-10">
 		<input type="email" name="email" id="email" class="form-control" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label for="komentar" class="control-label col-md-2">Komentar</label>
 	<div class="col-md-10">
 		<textarea name="komentar" id="komentar" rows="8" class="form-control" required></textarea>
 	</div>
 	</div>

 	<div class="form-group">
 	<div class="col-md-10 col-md-offset-2">
 		<input type="submit" value="Kirim Pesan" class="btn btn-primary">
 	</div>
 	</div>

 </form>