<?php 
	$nama_gambar = $_FILES['gambar']['name'];
	$lokasi_gambar = $_FILES['gambar']['tmp_name'];
	$tipe_gambar = $_FILES['gambar']['type'];

	$tanggal = date('Ymd');
	$isi = addslashes($_POST['isi']);

	if ($lokasi_gambar=="") {
		$input = mysqli_query($koneksi,"insert into artikel set 
			     judul	= '$_POST[judul]',
			     kategori='$_POST[kategori]',
			     isi    = 'isi',
			     tanggal = '$tanggal'
			   ") or die (mysqli_error($koneksi));
	}else{
		move_uploaded_file($lokasi_gambar, "../gambar/artikel/$nama_gambar");
		$input = mysqli_query($koneksi,"insert into artikel set
				judul	= '$_POST[judul]',
				kategori='$_POST[kategori]',
				isi 	= '$isi',
				tanggal = '$tanggal',
				gambar  = '$nama_gambar'
			") or die(mysqli_error($koneksi));
	}
	if ($input) {
		echo "Data Telah Tersimpan";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=artikel'>";
	}
	
?>