<?php 
	mysqli_query($koneksi,"delete from komentar where id_komentar='$_GET[id]'") or die(mysqli_error($koneksi));

	echo "Data Telah di hapus";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=komentar'>";
 ?>