<?php 
	$hapus = mysqli_query($koneksi,"delete from halaman where id_halaman='$_GET[id]'") or die (mysqli_error());

	if ($hapus) {
		echo "Data Telah Dihapus";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=halaman'>";
	}
?>