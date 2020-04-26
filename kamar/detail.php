<?php  
$koneksi = mysqli_connect("localhost","root","","kamar_hotel");
include '../aset/header.php';

$id_kamar = $_GET['id_kamar'];

$sql = "SELECT * FROM kamar WHERE id_kamar=$id_kamar";
$res = mysqli_query($koneksi, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Kamar</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Kamar</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
				<tr>
					<td><strong>Biaya Sewa</strong></td>
					<td><?=$detail['biaya_sewa'];?></td>
				</tr>
				
					<td><strong>Kategori</strong></td>
					<td><?=$detail['id_kategori'];?></td>
				</tr>
				
				<td><strong>Model Kamar</strong></td>
					<td><img src="<?=$detail['model']?>" style="width: 25%" alt=""></td>
				</tr>
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include '../aset/footer.php';
?>