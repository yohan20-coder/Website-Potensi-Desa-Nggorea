<?php 
	if(!defined("INDEX")) die("---");

	include "konten/slide_perikanan.php";

	$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
	$batas	= 4;
	$posisi = ($hal-1) * $batas;

	$artikel = mysqli_query($koneksi,"select * from artikel where kategori = 'Perikanan' order by id_artikel desc LIMIT $posisi, $batas");

	while($data = mysqli_fetch_array($artikel)){
		$isi = substr($data['isi'], 0,500);
		$isi = substr($data['isi'], 0,strrpos($isi," "));
 ?>


<hr>
 <div class="artikel">
 <ul class="breadcrumb">
	<li style="font-size: 15px"><b><?= $data['judul']; ?></b></li>
	<li class="active"><b>Perikanan</b></li>
</ul>
 	
 	<div class="row">
 		<div class="col-md-4">
 		<?php if($data['gambar']!="") ?>
 		<img src="gambar/artikel/<?= $data['gambar'];?>" class ="thumbnail" width="100%" height="150px">
 	</div>
 	<div class="col-md-8">
 		<?= $isi; ?>
 		<a href="?tampil=artikel_detail&id=<?= $data['id_artikel'];?>" class="btn btn-primary btn-xs">Selengkapnya</a>
 	</div>
 </div>
 </div>
 <?php 
 	}

 	$semua	= mysqli_query($koneksi,"select * from artikel where kategori = 'perikanan'");
 	$jmldata = mysqli_num_rows($semua);
 	$jmlhal	 = ceil($jmldata/$batas);
 	$sebelumnya = $hal - 1;
 	$berikutnya = $hal + 1;

 	echo "<div class='paging'>";

 	//bagian 1
 	if($hal > 1){
 		echo "<span class='btn btn-warning'><a href='?tampil=perikanan&hal=1' >
 			Pertama</a></span>";

 		echo "<span class='btn btn-warning'><a href='?tampil=perikanan&hal=$sebelumnya' >
 			Sebelumnya</a></span>";
 	}else{
 		echo "<span class='btn btn-warning'>Pertama</span>";
 		echo "<span class='btn btn-warning'>Sebelumnya</span>";
 	}

 	//bagian 2
 	for ($i=1; $i<=$jmlhal; $i++) { 
 		if($i == $hal) echo "<span><b>$i</b></span>";
 		else echo "<span class='btn btn-warning'><a href='?tampil=perikanan&hal=$i'> $i
 			</a></span>";
 	}

 	//bagian 3
 	if($hal < $jmlhal){
 		echo "<span class='btn btn-warning'><a href='?tampil=perikanan&hal=$berikutnya' >
 			Berikutnya</a></span>";

 		echo "<span class='btn btn-warning'><a href='?tampil=perikanan&hal=$jmlhal' >
 			Terakhir</a></span>";
 	}else{
 		echo "<span class='btn btn-warning'>Berikutnya</span>";
 		echo "<span class='btn btn-warning'>Terakhir</span>";
 	}

echo "</div>";
  ?>