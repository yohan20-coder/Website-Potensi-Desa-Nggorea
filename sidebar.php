<?php 
if(!defined("INDEX")) die("---");
?>
<br>
<ul class="nav nav-tabs" style="background-color: #fad08d;">
	<li class="active" style="color: black"><a href="#konten1" data-toggle="tab"><b>Terbaru</b></a></li>
	<li><a href="#konten2" data-toggle="tab"><b>Popular</b></a></li>
	<li><a href="#konten3" data-toggle="tab"><b>Komentar</b></a></li>
</ul>
<div class="tab-content">
	<div class="tab-pane fade in active" id="konten1">
	<ul>
		<?php
			$artikel = mysqli_query($koneksi,"select * from artikel order by id_artikel desc limit 5");
			while($data=mysqli_fetch_array($artikel)){
				echo "<li><img src='gambar/artikel/$data[gambar]' ><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
			}
		?>
	</ul>
</div>
	<!--3/-->
	<div class="tab-pane fade" id="konten2">
	<ul>
		<?php
			$artikel = mysqli_query($koneksi,"select * from artikel order by hits desc limit 5");
			while($data=mysqli_fetch_array($artikel)){
				echo "<li><img src='gambar/artikel/$data[gambar]' ><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
			}
		?>
	</ul>
</div>

<div class="tab-pane fade" id="konten3">
	<ul>
		<?php
			$komentar = mysqli_query($koneksi,"select * from komentar order by id_komentar desc limit 5");
			while($data=mysqli_fetch_array($komentar)){
				echo "<li><b>$data[nama] : </b> <a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[komentar]</a></li>";
			}
		?>
	</ul>
</div>
</div>
<hr>

<ul class="breadcrumb">
	<li style="font-size: 15px"><b>Sosial Media</b></li>
	<li class="active"><b>Share</b></li>
</ul>
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_pinterest"></a>
<a class="a2a_button_facebook_messenger"></a>
<a class="a2a_button_line"></a>
<a class="a2a_button_skype"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
<hr>


<ul class="breadcrumb">
	<li style="font-size: 15px"><b>Video</b></li>
	<li class="active">Profil Desa</li>
</ul>
	  <?php
			$artikel = mysqli_query($koneksi,"select * from video");
			while($video=mysqli_fetch_array($artikel)){
			?>
				<video src="media/<?= $video['video'];?>" width="100%" controls></video>
		<?php }
		?>
<hr>

<ul class="breadcrumb">
	<li style="font-size: 15px"><b>Jumlah Pengunjung</b></li>
	<li class="active"></li>
</ul>
<!-- <a href="http://maxoderm.co" style="font-size:8px;"></a>
<a href="http://maxoderm.co"><img src="http://maxoderm.co/count.php?c_style=1&id=1565186705" class="gambar-artikel" border="0"></a> -->
<a href="https://24counter.com"><img src="https://24counter.com/count.php?c_style=1&id=1570519258" border=0 alt="web counter"></a><br><a href="https://24counter.com" style="font-size:9px;"></a>
<br>

<hr>

<ul class="breadcrumb">
	<li style="font-size: 15px"><b>Lokasi Desa Nggorea</b></li>
	<li class="active">Maps</li>
</ul>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215384.481938785!2d121.41533386354556!3d-8.738778571268453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db2985381d9ae07%3A0x2063c64b4e17ee51!2sNangapanda%2C+Kabupaten+Ende%2C+Nusa+Tenggara+Tim.!5e1!3m2!1sid!2sid!4v1565145180817!5m2!1sid!2sid" width="370" height="450" frameborder="0" style="border:2" allowfullscreen></iframe> -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7797.276406311101!2d121.50493998584828!3d-8.799941218396002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db2a246fc2372cf%3A0xd9488b43853e38b5!2sNggorea%2C%20Nangapanda%2C%20Kabupaten%20Ende%2C%20Nusa%20Tenggara%20Tim.!5e0!3m2!1sid!2sid!4v1570476810086!5m2!1sid!2sid" width="370" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>



