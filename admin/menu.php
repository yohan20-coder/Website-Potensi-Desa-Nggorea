<?php 
	if(!defined("INDEX")) die("---");
 ?>

<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="#">Halaman Administrator</a>
</div>

<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav visible-xs">
	<li><a href="admin.php">Beranda</a></li>
	<!-- <li><a href="?tampil=menu">Menu</a></li>
	<li><a href="?tampil=submenu">Sub Menu</a></li> -->
	<li><a href="?tampil=halaman">Halaman</a></li>
	<li><a href="?tampil=artikel">Artikel</a></li>
	<li><a href="?tampil=galeri">Galeri</a></li>
	<li><a href="?tampil=pesan">Pesan</a></li>
	<li><a href="?tampil=user">Pengguna</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
	<li><a href="../"target="blank">Preview</a></li>
	<!-- <li><a href="?tampil=user_edit">Profil</a></li> -->
	<li><a href="?tampil=keluar">Keluar</a></li>
</ul>
</div>