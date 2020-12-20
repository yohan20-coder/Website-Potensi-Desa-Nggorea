<?php 
	if(!defined("INDEX")) die("---");

	$artikel = mysqli_query($koneksi,"select * from halaman where id_halaman ='$_GET[id]'");
	$data = mysqli_fetch_array($artikel);
	$isi = $data['isi'];
 ?>
 <div class="halaman">
 <ul class="breadcrumb">
	<li style="font-size: 20px"><b><?= $data['judul']; ?></b></li>
	<li class="active"><b></b></li>
</ul>
 	<h2 class="judul"></h2>

 	<div class="container">
      <div class="row">
         <div class="col-md-12">
            <?php if($data['gambar']!="") ?>
 			<img src="gambar/halaman/<?= $data['gambar'];?>" class ="gambar-artikel" width="710" height="400">
         </div>
      </div>
   </div>

 	<p>
 		<?= $isi; ?>
 	</p>
 </div>