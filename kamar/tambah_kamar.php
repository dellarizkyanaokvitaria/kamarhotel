<?php  
include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($koneksi, "SELECT * FROM kategori");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Kamar</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Tambah Data Kamar</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambah_kamar.php">
							<table class="table">
							<tr>
								<td>Biaya Sewa</td>
								<td><input type="text" name="biaya_sewa"></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td>
									<select style="width: 200px" name="id_kategori">
										<option value="">-- Pilih Kategori --</option>
										<?php  
											while ($kategori = mysqli_fetch_assoc($query)):
										?>
										<option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
										<?php  
											endwhile;
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Stok</td>
								<td><input type="text" name="stok"></td>
							</tr>
							<tr>
								<td>Model</td>
								<td><input type="file" name="model"></td>
							</tr>
							<tr>
								<th></th>
								<th><input type="submit" class="btn btn-primary" name="simpan" value="simpan"></th>
							</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php  
include '../aset/footer.php';
?>