<?php 
	if(!defined("INDEX")) die("---");

	$tgl = date('Ymd');
	mysqli_query($koneksi,"insert into komentar set 
		id_artikel	= '$_POST[id]',
		nama		= '$_POST[nama]',
		hp 			= '$_POST[hp]',
		email 		= '$_POST[email]',
		komentar	= '$_POST[komentar]',
		tanggal		= '$tgl'
		") or die(mysqli_error($koneksi));

	echo "komentar telah terkirim";
	// echo "<meta http-equiv='refresh' content= '1;
	// url=?tampil=home'>";

	echo "<meta http-equiv='refresh' content= '1;
	url=?tampil=artikel_detail&id=$_POST[id]'>";

?>
