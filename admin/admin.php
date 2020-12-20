<?php
    session_start();

    if (!empty($_SESSION['username']) and !empty($_SESSION['password'])) {
    include("../lib/koneksi.php");
    define("INDEX",true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman administrator</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../lib/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../lib/DataTables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/DataTables/datatables.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel ="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" type="text/css" href="../ckeditor/bootstrap.css">
  
</head>
<body>
    <script src="../ckeditor/ckeditor.js"></script>

   <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container-fluid">
       <?php include("menu.php") ?>
     </div>
   </nav>
   <div class="container-fluid">
     <div class="row">
       <div class="col-md-2 col-sm-3 sidebar hidden-xs">
           <?php include("sidebar.php") ?>
       </div> 
       <div id="konten" class="col-md-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php include("konten.php") ?>
       </div>
     </div>
   </div>
 
     <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
     <script src="../lib/DataTables/jquery.js"></script>
      <script src="../lib/DataTables/DataTables-1.10.16/js/jquery.dataTables.js"></script>
      <script src="../lib/DataTables/datatables.min.js"></script>
      <script src="../lib/DataTables/datatables.js"></script>
      <script src="../lib/DataTables/DataTables-1.10.16/js/dataTables.bootstrap.js"></script>
      <script>
    $(document).ready(function() {
        $('#aku').DataTable({
                responsive: true
        });
    });
    </script>
     
     

</body>
</html>
<?php 
  }else{
    echo "Dilarang Membuka Halaman Ini !";
    echo "<meta http-equiv='refresh' content= '1;
    url=index.php'>";
  }

 ?>