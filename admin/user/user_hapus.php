<?php 
	$hapus = mysqli_query($koneksi,"delete from user where id_user='$_GET[id]'") or die (mysqli_error());

	if ($hapus) {
		echo "Data Telah Dihapus";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=user'>";
	}
?>