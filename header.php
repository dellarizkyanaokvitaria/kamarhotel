<?php
session_start(); 
if(!isset($_SESSION["id_petugas"])){
  header("Location: http://localhost/kamarhotel/login/index.php");
  exit;
}
?>
<!DOCTYPE html>
<center>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible"content="ie=edge">
  <link rel="stylesheet" href="http://localhost/kamarhotel/aset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/kamarhotel/aset/fontawesome/css/all.min.css">

	<title>Kamar Hotel </title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-book-reader text-white mr-2"></i>'KamarHotel | Hai,Admin'</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="http://localhost/kamarhotel/index.php">Dashboard</a>
      <a class="nav-item nav-link" href="http://localhost/kamarhotel/kamar/index.php">Kamar</a>
      <a class="nav-item nav-link" href="http://localhost/kamarhotel/pelanggan/index.php">Pelanggan</a>
       <a class="nav-item nav-link" href="http://localhost/kamarhotel/transaksi/index.php">Penyewaan</a>
 <a class="nav-item nav-link"  href="http://localhost/kamarhotel/login/logout.php">Logout</a>
      
    </div>
  </div>
</nav>

<script src="http://localhost/kamarhotel/aset/jquery.js"></script>
<script src="http://localhost/kamarhotel/aset/bootstrap/js/bootstrap.min.js"></script>
</center>
	</html>