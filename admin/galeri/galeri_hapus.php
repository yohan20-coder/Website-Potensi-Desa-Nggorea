<?php 
	$data = mysqli_fetch_array(mysqli_query($koneksi,"select * from galeri where id_galeri ='$_GET[id]'"));

	if ($data['gambar'] !="") 
			unlink("../gambar/galeri/$data[gambar]");

	$hapus = mysqli_query($koneksi,"delete from galeri where id_galeri='$_GET[id]'") or die(mysqli_error($koneksi));

	if ($hapus) {
		echo "Data Telah di hapus";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=galeri'>";
	}
 ?>