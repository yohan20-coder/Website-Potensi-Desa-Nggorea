<?php 
	$nama_gambar = $_FILES['gambar']['name'];
	$lokasi_gambar = $_FILES['gambar']['tmp_name'];
	$tipe_gambar = $_FILES['gambar']['type'];

	
	$isi = addslashes($_POST['isi']);

	if ($lokasi_gambar=="") {
		$input = mysqli_query($koneksi,"insert into halaman set 
			     judul	= '$_POST[judul]',
			     isi    = 'isi',
			   ") or die (mysqli_error($koneksi));
	}else{
		move_uploaded_file($lokasi_gambar, "../gambar/halaman/$nama_gambar");
		$input = mysqli_query($koneksi,"insert into halaman set
				judul	= '$_POST[judul]',
				gambar  = '$nama_gambar',
				isi 	= '$isi'
				
			") or die(mysqli_error($koneksi));
	}
	if ($input) {
		echo "Data Telah Tersimpan";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=halaman'>";
	}
	
?>