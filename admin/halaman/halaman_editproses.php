<?php 
	$nama_gambar = $_FILES['gambar']['name'];
	$lokasi_gambar = $_FILES['gambar']['tmp_name'];
	$tipe_gambar = $_FILES['gambar']['type'];

	
	$isi = addslashes($_POST['isi']);

	if ($lokasi_gambar=="") {
		$edit = mysqli_query($koneksi,"update halaman set
				judul ='$_POST[judul]',
				isi ='$isi'
		where id_halaman='$_POST[id]'") or die(mysqli_error($koneksi));
	}else{
		$data = mysqli_fetch_array(mysqli_query($koneksi,"select * from halaman where id_halaman ='$_POST[id]'"));

		if ($data['gambar'] !="") 
			unlink("../gambar/halaman/$data[gambar]");

		move_uploaded_file($lokasi_gambar,"../gambar/halaman/$nama_gambar");

		$edit = mysqli_query($koneksi,"update halaman set
				judul	= '$_POST[judul]',
				isi 	= '$isi',
				gambar  = '$nama_gambar'
			where id_halaman='$_POST[id]'") or die(mysqli_error($koneksi));
	}
	if ($edit) {
		echo "Data Telah di edit";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=halaman'>";
	}
 ?>




































