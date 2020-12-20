<?php 
	if(!defined("INDEX")) die("---");

	$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
	$batas	= 5;
	$posisi = ($hal-1) * $batas;

	$artikel = mysqli_query($koneksi,"select * from artikel where isi like '%$_REQUEST[kata]%' order by id_artikel desc LIMIT $posisi, $batas");
	$semua	= mysqli_query($koneksi,"select * from artikel");
 	$jmldata = mysqli_num_rows($semua);
	if($jmldata > 0){
	echo "Hasil pencarian dari <b>$_REQUEST[kata]</b>";
	while($data = mysqli_fetch_array($artikel)){
		$isi = substr($data['isi'], 0,800);
		$isi = substr($data['isi'], 0,strrpos($isi," "));
 ?>

 <div class="artikel">
	 <ul class="breadcrumb">
	<li style="font-size: 15px"><b><?= $data['judul']; ?></b></li>
	<li class="active"><b>Artikel</b></li>
	</ul>
 	<p>
 		<?php if($data['gambar']!="") ?>
 		<img src="gambar/artikel/<?= $data['gambar'];?>" class ="gambar-artikel" width="200">

 		<?= $isi; ?>
 		<a href="?tampil=artikel_detail&id=<?= $data['id_artikel'];?>" class="btn btn-primary btn-xs" >Selengkapnya</a>
 	</p>
 </div>
 <?php 
 	}

 	
 	$jmlhal	 = ceil($jmldata/$batas);
 	$sebelumnya = $hal - 1;
 	$berikutnya = $hal + 1;

 	echo "<div class='paging'>";

 	//bagian 1
 	if($hal > 1){
 		echo "<span class='btn btn-default><a href='?tampil=pencarian&kata=$_REQUEST[kata]&hal=1' >
 			Pertama</a></span>";

 		echo "<span class='btn btn-default><a href='?tampil=pencarian&kata=$_REQUEST[kata]&hal=$sebelumnya' >
 			Sebelumnya</a></span>";
 	}else{
 		echo "<span class='btn btn-default>Pertama</span>";
 		echo "<span class='btn btn-default>Sebelumnya</span>";
 	}

 	//bagian 2
 	for ($i=1; $i<$jmlhal; $i++) { 
 		if($i == $hal) echo "<span class='btn btn-default><b>$i</b></span>";
 		else echo "<span class='btn btn-default><a href='?tampil=pencarian&kata=$_REQUEST[kata]&hal=$i'> $i
 			</a></span>";
 	}

 	//bagian 3
 	if($hal < $jmlhal){
 		echo "<span class='btn btn-default><a href='?tampil=pencarian&kata=$_REQUEST[kata]&hal=$berikutnya' >
 			Berikutnya</a></span>";

 		echo "<span class='btn btn-default><a href='?tampil=pencarian&kata=$_REQUEST[kata]&hal=$jmlhal' >
 			Terakhir</a></span>";
 	}else{
 		echo "<span class='btn btn-default>Berikutnya</span>";
 		echo "<span class='btn btn-default>Terakhir</span>";
 	}

echo "</div>";

	}else{
		echo "Kata yang dicari tidak ditemukan";
	}
  ?>