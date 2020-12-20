<?php
	$input = mysqli_query($koneksi, "insert into submenu set 
				judul ='$_POST[judul]',
				id_menu ='$_POST[induk]',
 				link  ='$_POST[link]',
				urutan ='$_POST[urutan]'
				") or die(mysqli_error($koneksi));

	if ($input) {
		echo "Data Telah Tersimpan";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=submenu'>";
	}
?>