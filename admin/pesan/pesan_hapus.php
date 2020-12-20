<?php 
	mysqli_query($koneksi,"delete from pesan where id_pesan='$_GET[id]'") or die(mysqli_error($koneksi));

	echo "Data Telah di hapus";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=pesan'>";
 ?>