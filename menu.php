<?php 
if(!defined("INDEX")) die("---");
?>

<div class="navbar navbar-inverse" style="background-color: #671b04">
	<div class="header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
			<div  class="icon-bar"></div>
			<div  class="icon-bar"></div>
			<div  class="icon-bar"></div>
		</button>
	</div>
	<div id="navbar" class="collapse navbar-collapse"><br>
		<form method="post" action="?tampil=pencarian" class="search pull-right col-md-4">
			<div class="input-group">
				<input type="text" name="kata" placeholder="Cari disini..." class="form-control">
				<span class="input-group-btn">
					<input type="submit" value="cari" class="btn">
				</span>
			</div>
		</form>

		<ul class="nav navbar-nav" style="background-color:#671b04">
			<?php 
			$menu = mysqli_query($koneksi,"select * from menu order by urutan");
			while($data=mysqli_fetch_array($menu)){
				$submenu = mysqli_query($koneksi,"select * from submenu where id_menu ='$data[id_menu]'");
				$jmlsub = mysqli_num_rows($submenu);
				if($jmlsub < 1){
			?>
				<li><a href="<?= $data['link'];?>">
					<b><?= $data['judul'];?></b></a></li>
			<?php 
				}else{
			?>
				<li class="dropdown">
					<a href="<?= $data['link'];?>" 
						class="dropdown-toggle data-toggle = dropdown">
							<b><?= $data['judul'];?></b>
							<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background-color: #671b04 !important">
					<?php 
						while($datasub = mysqli_fetch_array($submenu)){
					?>
						<li><a href="<?= $datasub['link'];?>">
							<?= $datasub['judul'];?></a></li>
				<?php 
					}

				?>

						</ul>
				</li>
		<?php
				}
				}
			?>
		<!-- <li><a href="#"><b>Blog</b></a></li> -->
	</div>
</div>