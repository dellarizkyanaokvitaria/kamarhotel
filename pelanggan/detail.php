<?php  
include '../aset/header.php';
include '../koneksi.php';

$id_pelanggan = $_GET['id_pelanggan'];

$sql = "SELECT * FROM pelanggan a INNER JOIN level l ON a.id_level=l.id_level WHERE id_pelanggan=$id_pelanggan";
$res = mysqli_query($koneksi, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Pelanggan</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Pelanggan</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
				<tr>
					<td><strong>Nama</strong></td>
					<td><?=$detail['nama'];?></td>
				</tr>
				<tr>
					<td><strong>Jenis Kelamin</strong></td>
					<td><?=$detail['jenis_kelamin']?></td>
				</tr>
				<tr>
					<td><strong>Telepon</strong></td>
					<td><?=$detail['telp']?></td>
				</tr>
				<tr>
					<td><strong>Username</strong></td>
					<td><?=$detail['username']?></td>
				</tr>
				<tr>
					<td><strong>Password</strong></td>
					<td><?=$detail['password']?></td>
				</tr>
				<tr>
					<td><strong>Level</strong></td>
					<td><?=$detail['level']?></td>
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