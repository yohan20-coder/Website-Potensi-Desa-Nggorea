<h2 class="sub-hedaer">Tambah Video</h2>
<form enctype="multipart/form-data" method="POST" class="form-horizontal">
	<div class="form-group">
 		<label class="control-label col-md-2">Nama Video</label>
 	<div class="col-md-4">
 		<input type="text" name="judul" class="form-control" size="50" required>
 	</div>
 	</div>

	<div class="form-group">
 		<label class="control-label col-md-2">Video</label>
 	<div class="col-md-4">
 		<input type="file" name="video" class="form-control" required>
 	</div>
 	</div>

 	<div class="form-group">
 		<label class="control-label col-md-2"></label>
 	<div class="col-md-4">
 		<input type="submit" name="tambah" value="Tambah Data" class="btn btn-primary" required>
 	</div>
 	</div>
</form>

<?php
if (isset($_POST['tambah'])){

    $nama_video = $_FILES['video']['name'];
    $lokasi_video = $_FILES['video']['tmp_name'];
    $tipe_video = $_FILES['video']['type'];

    if ($lokasi_video=="") {
        $input = mysqli_query($koneksi,"insert into video set 
                 nama  = '$_POST[judul]'
                
               ") or die (mysqli_error($koneksi));
    }else{
        move_uploaded_file($lokasi_video,"../media/$nama_video") or die ('Gagal:'.$_FILES["video"]["error"]);
        $input = mysqli_query($koneksi,"insert into video set
                nama   = '$_POST[judul]',
                video  = '$nama_video'
                
            ") or die(mysqli_error($koneksi));
    }
    if ($input) {
        echo "Data Telah Tersimpan";
       echo "<meta http-equiv='refresh' content= '5;
       url=?tampil=video'>";
    }
    
}
?>





