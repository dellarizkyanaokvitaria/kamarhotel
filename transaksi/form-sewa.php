<?php 
 include '../koneksi.php';
include 'fungsi-transaksi.php';

$kamar 		= ambilKamar($koneksi);
$pelanggan 	= ambilPelanggan($koneksi);
$petugas	= mysqli_query($koneksi,"SELECT * FROM petugas");

include '../aset/header.php';

?>

<! DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h3>Form Tambah Penyewaan</h3>
				</div>
				<div class="card-body">
					<form method="post" action="proses-sewa.php">
						<div class="form-group">
							<label for="pelanggan">Nama pelanggan</label>
							<select name="id_pelanggan" class="form-control">
								<?php  
								foreach ($pelanggan as $a) { ?>

									<option value="<?=$a['id_pelanggan']?>"><?=$a['nama']?></option>
								<?php }
								?>

							</select>
						</div>

						<div class="form-group">
							<label for="kamar">Biaya Kamar</label>
							<select name="id_kamar" class="form-control">
								<?php  
								foreach ($kamar as $b) {?>
									<option value="<?=$b['id_kamar']?>"><?=$b['biaya_sewa']?></option>

								<?php }
								?>
							</select>

						</div>

						<div class="form-group">
							<label for="datepicter">Tanggal Sewa</label>
							<input type="date" name="tgl_sewa" class="form-control" require>
						</div>

						<div class="form-group">
							<button type="submit" name="btnPinjam" class="btn btn-primary mt-auto">Simpan</button>
						</div>
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