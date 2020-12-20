<?php 
session_start();
include("lib/koneksi.php");
define("INDEX",true);
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>WEB POTENSI DESA</title>
   <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/side.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
   <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 </head>
 <body>
<!--
<header>
   <div id="header">
      <div class="container">
         <div class="row">
            
         </div>
      </div>     
   </div>
</header>-->

<nav id="menu">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <?php include("menu.php") ?>
         </div>
      </div>
   </div>
</nav>

<content id="content">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <?php include("konten.php") ?>
         </div>
         <div class="col-md-4">
            <?php include("sidebar.php") ?>
         </div>
      </div>
   </div>
</content>

<footer id="footer" style="background-color: #671b04">
   <div class="container">
      <div class="rows">
         <div class="col-md-12">
            <b><p align="center">Copyright &copy : ANDY. 2019</p></b>
         </div>
      </div>
   </div>
</footer>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 </body>
 </html>