<?php
	$edit = mysqli_query($koneksi, "update menu set 
				judul ='$_POST[judul]',
 				link  ='$_POST[link]',
				urutan ='$_POST[urutan]'
			where id_menu='$_POST[id]'") or die(mysqli_error($koneksi));

	if ($edit) {
		echo "Data Telah Diedit";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=menu'>";
	}
?>