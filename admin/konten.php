<?php 
	if(!defined("INDEX")) die("---");
	
	if (isset($_GET['tampil'])) $tampil = $_GET['tampil'];
	else $tampil = "beranda";

	if ($tampil=="beranda") include("beranda.php");
	elseif ($tampil == "keluar") include("keluar.php");

	elseif($tampil == "menu")
		include("menu/menu_tampil.php");
	elseif($tampil == "menu_tambah")
		include("menu/menu_tambah.php");
	elseif($tampil == "menu_tambahproses")
		include("menu/menu_tambahproses.php");
	elseif($tampil == "menu_edit")
		include("menu/menu_edit.php");
	elseif($tampil == "menu_editproses")
		include("menu/menu_editproses.php");
	elseif($tampil == "menu_hapus")
		include("menu/menu_hapus.php");

	elseif($tampil == "submenu")
		include("submenu/submenu_tampil.php");
	elseif($tampil == "submenu_tambah")
		include("submenu/submenu_tambah.php");
	elseif($tampil == "submenu_tambahproses")
		include("submenu/submenu_tambahproses.php");
	elseif($tampil == "submenu_edit")
		include("submenu/submenu_edit.php");
	elseif($tampil == "submenu_editproses")
		include("submenu/submenu_editproses.php");
	elseif($tampil == "submenu_hapus")
		include("submenu/submenu_hapus.php");

	elseif($tampil == "halaman")
		include("halaman/halaman_tampil.php");
	elseif($tampil == "halaman_tambah")
		include("halaman/halaman_tambah.php");
	elseif($tampil == "halaman_tambahproses")
		include("halaman/halaman_tambahproses.php");
	elseif($tampil == "halaman_edit")
		include("halaman/halaman_edit.php");

	elseif($tampil == "halaman_editproses")
		include("halaman/halaman_editproses.php");

	elseif($tampil == "halaman_hapus")
		include("halaman/halaman_hapus.php");

	elseif($tampil == "artikel")
		include("artikel/artikel_tampil.php");
	elseif($tampil == "artikel_tambah")
		include("artikel/artikel_tambah.php");
	elseif($tampil == "artikel_tambahproses")
		include("artikel/artikel_tambahproses.php");
	elseif($tampil == "artikel_edit")
		include("artikel/artikel_edit.php");
	elseif($tampil == "artikel_editproses")
		include("artikel/artikel_editproses.php");
	elseif($tampil == "artikel_hapus")
		include("artikel/artikel_hapus.php");

	elseif($tampil == "galeri")
		include("galeri/galeri_tampil.php");
	elseif($tampil == "galeri_tambah")
		include("galeri/galeri_tambah.php");
	elseif($tampil == "galeri_tambahproses")
		include("galeri/galeri_tambahproses.php");
	elseif($tampil == "galeri_edit")
		include("galeri/galeri_edit.php");
	elseif($tampil == "galeri_editproses")
		include("galeri/galeri_editproses.php");
	elseif($tampil == "galeri_hapus")
		include("galeri/galeri_hapus.php");

	elseif($tampil == "pesan")
		include("pesan/pesan_tampil.php");
	elseif($tampil == "pesan_balas")
		include("pesan/pesan_balas.php");
	elseif($tampil == "pesan_balasproses")
		include("pesan/pesan_balasproses.php");
	elseif($tampil == "pesan_hapus")
		include("pesan/pesan_hapus.php");

	elseif($tampil == "video")
		include("video/video_tampil.php");
	elseif($tampil == "video_tambah")
		include("video/video_tambah.php");
	elseif($tampil == "video_tambahproses")
		include("video/video_tambahproses.php");
	elseif($tampil == "video_edit")
		include("video/video_edit.php");
	elseif($tampil == "video_editproses")
		include("video/video_editproses.php");

	elseif($tampil == "komentar")
		include("komentar/komentar_tampil.php");
	elseif($tampil == "komentar_hapus")
		include("komentar/komentar_hapus.php");

	elseif($tampil == "user")
		include("user/user_tampil.php");
	elseif($tampil == "user_tambah")
		include("user/user_tambah.php");
	elseif($tampil == "user_tambahproses")
		include("user/user_tambahproses.php");
	elseif($tampil == "user_edit")
		include("user/user_edit.php");
	elseif($tampil == "user_hapus")
		include("user/user_hapus.php");
	elseif($tampil == "user_editproses")
		include("user/user_editproses.php");

	else echo "Konten Tidak Ada";
 ?>