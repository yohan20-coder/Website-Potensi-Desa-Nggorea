<?php
	$edit = mysqli_query($koneksi, "update submenu set 
				judul ='$_POST[judul]',
				id_menu ='$_POST[induk]',
 				link  ='$_POST[link]',
				urutan ='$_POST[urutan]'
			where id_submenu='$_POST[id]'") or die(mysqli_error($koneksi));

	if ($edit) {
		echo "Data Telah Diedit";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=submenu'>";
	}
?>