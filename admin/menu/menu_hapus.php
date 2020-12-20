<?php 
	$hapus = mysqli_query($koneksi,"delete from menu where id_menu='$_GET[id]'") or die (mysqli_error());

	if ($hapus) {
		echo "Data Telah Dihapus";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=menu'>";
	}
?>