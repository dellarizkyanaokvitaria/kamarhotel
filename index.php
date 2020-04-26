<?php 
include 'koneksi.php';
include 'aset/header.php';
// session_start();
// if(!isset($_SESSION['id_petugas'])){
// 	header("Location : http://localhost/kamarhotel/login/index.php");
// }

$kamar = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT SUM(stok) AS jb FROM kamar"));
$jumlah_kamar = $kamar["jb"];

$pelanggan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS ja FROM pelanggan"));
$jumlah_pelanggan = $pelanggan["ja"];

$sewa = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS jt FROM penyewaan"));
$jumlah_transaksi = $sewa["jt"];
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
			<hr class="bg-light">
			</div>
		</div>
	</div>
	<div class="row ml-5">
		<div class="col-md-4">
			<div class="card bg-danger" style="width: 18rem;">
  			<div class="card-body text-white">
    			<h5 class="card-title">Jumlah Kamar</h5>
			    <p class="card-text" style="font-size: 60px"><?= $jumlah_kamar; ?></p>
			    <a href="http://localhost/kamarhotel/kamar/index.php" class="text-white">Lebih detail >>> <i class="fas fa-angel-double-right"></i></a>
  			</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-warning" style="width: 18rem;">
  			<div class="card-body text-white">
    			<h5 class="card-title">Jumlah Pelanggan</h5>
			    <p class="card-text" style="font-size: 60px"><?= $jumlah_pelanggan; ?></p>
			    <a href="http://localhost/kamarhotel/pelanggan/index.php" class="text-white">Lebih detail >>> <i class="fas fa-angel-double-right"></i></a>
  			</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-info" style="width: 18rem;">
  			<div class="card-body text-white">
    			<h5 class="card-title">Jumlah Transaksi</h5>
			    <p class="card-text" style="font-size: 60px"><?= $jumlah_transaksi; ?></p>
			    <a href="http://localhost/kamarhotel/transaksi/index.php" class="text-white">Lebih detail >>> <i class="fas fa-angel-double-right"></i></a>
  			</div>
			</div>
		</div>
	</div>
</div>
<?php 
include 'aset/footer.php';
?>