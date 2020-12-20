<div id="mycarousel" class="carousel slide" data-ride="carousel">
	<?php 
		if(!defined("INDEX")) die("---");
	?>
	<ol class="carousel-indicators">
		<?php
			$artikel = mysqli_query($koneksi,"select * from artikel where kategori = 'wisata dan budaya' order by id_artikel desc limit 4");
			$no=0;
			while($data=mysqli_fetch_array($artikel)){
		?>
			<li data-target="#mycarousel" data-slide-to="<?= $no; ?>"
			<?php if($no == 0) echo 'class="active"'; ?> ></li>
		<?php
			$no++;
			}
		?>
	</ol>

	<div class="carousel-inner" role="listbox">
		<?php
			$artikel = mysqli_query($koneksi,"select * from artikel where kategori = 'wisata dan budaya' order by id_artikel desc limit 4");
			$no=0;
			while($data=mysqli_fetch_array($artikel)){
				$isi = substr($data['isi'], 0,300);
				$isi = substr($data['isi'], 0,strrpos($isi," "));
		?>

			<div class="item <?php if($no==0) echo'active';?> ">
				<img src="gambar/artikel/<?= $data['gambar'];?>" class ="gambar-artikel" width="100%";>
			</div>
			<?php 
				$no++;
				}
			 ?>
	</div>

	<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
	<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
</div>