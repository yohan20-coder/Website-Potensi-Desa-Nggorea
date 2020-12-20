<?php 
	$hapus = mysqli_query($koneksi,"delete from submenu where id_submenu='$_GET[id]'") or die (mysqli_error());

	if ($hapus) {
		echo "Data Telah Dihapus";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=submenu'>";
	}
?>