<?php 
	$nama_gambar = $_FILES['gambar']['name'];
	$lokasi_gambar = $_FILES['gambar']['tmp_name'];
	$tipe_gambar = $_FILES['gambar']['type'];

	$tanggal = date('Ymd');
	$isi = addslashes($_POST['isi']);

	if ($lokasi_gambar=="") {
		$edit = mysqli_query($koneksi,"update artikel set
				judul ='$_POST[judul]',
				kategori ='$_POST[kategori]',
				isi ='$isi'
		where id_artikel='$_POST[id]'") or die(mysqli_error($koneksi));
	}else{
		$data = mysqli_fetch_array(mysqli_query($koneksi,"select * from artikel where id_artikel ='$_POST[id]'"));

		if ($data['gambar'] !="") 
			unlink("../gambar/artikel/$data[gambar]");

		move_uploaded_file($lokasi_gambar,"../gambar/artikel/$nama_gambar");

		$edit = mysqli_query($koneksi,"update artikel set
				judul	= '$_POST[judul]',
				kategori ='$_POST[kategori]',
				isi 	= '$isi',
				gambar  = '$nama_gambar'
			where id_artikel='$_POST[id]'") or die(mysqli_error($koneksi));
	}
	if ($edit) {
		echo "Data Telah di edit";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=artikel'>";
	}
 ?>