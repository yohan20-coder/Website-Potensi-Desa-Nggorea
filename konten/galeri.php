<link rel="stylesheet" type="text/css" href="plugin/fancybox/css/jquery.fancybox.css">
<script type="text/javascript" src="plugin/fancybox/js/jquery.fancybox.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox').fancybox();
	});
</script>

<?php 
if(!defined("INDEX")) die("---");

 ?>
<ul class="breadcrumb">
	<li>Home</li>
	<li class="active">Galeri Foto</li>
</ul>

 
 <div class="galeri">
 	<div class="row">
 			<?php
 				$no = 1;
 				$artikel = mysqli_query($koneksi,"select * from galeri order by id_galeri desc limit 24");
 				while($data=mysqli_fetch_array($artikel)){
 			?>
 			<div class="col-md-3">
 				<a class="fancybox" href="gambar/galeri/<?= $data['gambar'];?>" title="<?= $data['judul'];?>"><br>
 				<img src="gambar/galeri/<?= $data['gambar'];?>"width="170" height="100" class="thumbnail">
 				<b><?= $data['judul'] ?></b>
 			</a>
 			</div>
 			<?php 
 				if($no%4==0) echo "</div><div class='row'>";
 				$no++;
 			}
 			 ?>

 		</div>
 	
 </div>