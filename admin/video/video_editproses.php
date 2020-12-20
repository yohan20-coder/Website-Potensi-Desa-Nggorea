<?php 
	$nama_gambar = $_FILES['gambar']['name'];
	$lokasi_gambar = $_FILES['gambar']['tmp_name'];
	$tipe_gambar = $_FILES['gambar']['type'];

	if ($lokasi_gambar=="") {
		$edit = mysqli_query($koneksi,"update video set
				nama ='$_POST[judul]'
		where id_video='$_POST[id]'") or die(mysqli_error($koneksi));
	}else{
		$data = mysqli_fetch_array(mysqli_query($koneksi,"select * from video where id_video ='$_POST[id]'"));

		if ($data['video'] !="") 
			unlink("../media/$data[video]");

		move_uploaded_file($lokasi_gambar,"../media/$nama_gambar");

		$edit = mysqli_query($koneksi,"update video set
				nama	= '$_POST[judul]',
				video  = '$nama_gambar'
			where id_video='$_POST[id]'") or die(mysqli_error($koneksi));
	}
	if ($edit) {
		echo "Data Telah di edit";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=video'>";
	}