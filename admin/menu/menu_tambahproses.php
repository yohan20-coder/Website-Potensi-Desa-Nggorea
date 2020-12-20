<?php
	$input = mysqli_query($koneksi, "insert into menu set 
				judul ='$_POST[judul]',
 				link  ='$_POST[link]',
				urutan ='$_POST[urutan]'
				") or die(mysqli_error($koneksi));

	if ($input) {
		echo "Data Telah Tersimpan";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=menu'>";
	}
?>