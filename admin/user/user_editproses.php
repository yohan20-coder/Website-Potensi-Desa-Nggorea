<?php
	if ($_POST['password']=="") {
	$edit = mysqli_query($koneksi,"update user set username = '$_POST[username]' where id_user='$_GET[id]'") or die(mysqli_error($koneksi));
	if($edit) echo "Profl Berhasil Di enchant_dict_add_to_personal(dict, word)";
	}else{
		if($_POST['password']!=$_POST['password_ulang']){
			echo "<p style='color:red'> Password dan ulang password tidak sama</p>" ;
		}else{
			$password = md5($_POST['password']);
			$edit = mysqli_query($koneksi,"update user set 
				nama     ='$_POST[nama]',
				username ='$_POST[username]',
				password ='$password'
			where id_user='$_POST[id]'") or die(mysqli_error($koneksi));
		if($edit) echo "Profil Berhasil Di Edit";
		}
	}

	echo "<meta http-equiv='refresh' content= '1;
		url=?tampil=user'>";
?>