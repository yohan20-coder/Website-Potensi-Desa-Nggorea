<?php 
	$nama_gambar = $_FILES['gambar']['name'];
	$lokasi_gambar = $_FILES['gambar']['tmp_name'];
	$tipe_gambar = $_FILES['gambar']['type'];
	
	if ($lokasi_gambar=="") {
		$input = mysqli_query($koneksi,"insert into video set 
			     nama	= '$_POST[judul]'
			   ") or die (mysqli_error($koneksi));
	}else{
		move_uploaded_file($lokasi_gambar, "../gambar/video/$nama_gambar");
		$input = mysqli_query($koneksi,"insert into video set
				nama	= '$_POST[judul]',
				video  = '$nama_gambar'
			") or die(mysqli_error($koneksi));
	}
	if ($input) {
		echo "Data Telah Tersimpan";
		echo "<meta http-equiv='refresh' content= '25;
		url=?tampil=video'>";
	}
?>