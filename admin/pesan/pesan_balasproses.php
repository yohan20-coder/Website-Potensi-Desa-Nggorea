<!-- <?php
	// mysqli_query($koneksi,"update pesan set balasan = '$_POST[balas]' where id_pesan = '$_POST[id]'") or die (mysqli_error($koneksi));

	// $email = mail($_POST['email'],$_POST['subjek'], $_POST['pesan'], "From: pemilikwebsite@gmail.com");

	// echo "Pesan Telah di kirim";
	// 	echo "<meta http-equiv='refresh' content= '25;
	// 	url=?tampil=pesan'>";
?> -->

<?php
require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'webardian97@gmail.com';                 // SMTP username
$mail->Password = 'surabaya231997';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('webardian97@gmail.com', 'Admin Website');
$mail->addAddress('$_POST[email]', 'Pengunjung');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = '$_POST[subjek]';
$mail->Body    = '$_POST[balas] <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Email Gagal di kirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Email Berhasil di Kirim';

    $send = mysqli_query($koneksi,"update komentar set 
		balasan ='$_POST[balas]',
		status  ='Sudah Dibalas'
		") or die(mysqli_error($koneksi));

	if ($send){
	 echo "<meta http-equiv='refresh' content= '5;
	 	url=?tampil=pesan'>";
	}
}


	
