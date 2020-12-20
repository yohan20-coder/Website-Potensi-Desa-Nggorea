<?php
	
	$password = md5($_POST['password']);

	$input = mysqli_query($koneksi, "insert into user set 
				nama ='$_POST[nama]',
 				username  ='$_POST[username]',
				password ='$password'
				") or die(mysqli_error($koneksi));

	if ($input) {
		echo "Data Telah Tersimpan";
		echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=user'>";
	}
?>