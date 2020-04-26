<?php
include'../aset/header.php';
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					<h2>Tambah Data Pelanggan</h2>
				</div>
				<div class="card-body">
					<form method="post"action="proses-tambah.php">
						<div class="form-group">
							<label for="pelanggan">Nama Lengkap</label>
							<input type="text" class="form-control"name="nama" id="pelanggan"
					placeholder="Masukkan nama lengkap">
				</div>
				<div class="form-group">
					<label for="jenis_kelamin">Jenis_Kelamin</label>
					<input type="text" class="form-control"name="jenis_kelamin" id="jenis_kelamin" placeholder="Masukkan jenis kelamin">

					<small class="form-text text-muted">Contoh: Perempuan </small>
					<div>
						<div class="form-group">
							<label for="telp">Nomor Telepon</label>
							<input type="text" class="form-control" name="telp"id="telp" placeholder="Masukkan nomor telepon">
							<small class="form-text text-muted">Contoh: 111-222-3333</small>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username"id+"username" placeholder="Masukkan Username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="text" class="form-control" name="password"id+"password" placeholder="Masukkan Password">
						</div>

						<button type="submit"class="btn btn-=primary" name="simpan">Simpan</button>
						</>

				</div>
			</div>
		</div>
	</div>
</div>

<?
include'../aset/footer.php';
?>