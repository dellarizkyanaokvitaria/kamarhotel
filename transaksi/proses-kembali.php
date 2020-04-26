<?php
include '../koneksi.php';
include 'fungsi-transaksi.php';

if (isset($_POST['simpan'])) {
	$id_pinjam = $_POST['id_sewa'];
	$id_buku = $_POST['id_kamar'];
	$tgl_kembali = $_POST['tgl_kembali'];
	// var_dump($tgl_kembali);die;
	if ($tgl_kembali == null) {
		$count = mysqli_affected_rows($koneksi);
	} else {

		$sql = "UPDATE detail_sewa SET tgl_kembali='$tgl_kembali', status='kembali' WHERE id_sewa=$id_pinjam";
		$res = mysqli_query($koneksi, $sql);
		$count = mysqli_affected_rows($koneksi);
	}
	$stok_update = ambilStok($koneksi, $id_buku) + 1;

	if ($count == 1) {
		updateStok($koneksi, $id_kamar, $stok_update);
		$denda = hitungBayar($koneksi, $id_sewa, $tgl_kembali);

		$sql = "UPDATE penyewaan SET denda=$denda WHERE id_sewa=$id_pinjam";
		$res = mysqli_query($koneksi, $sql);

		header("Location: detail.php?id_sewa=$id_pinjam");
		exit;
	}
	else{
		header("Location: detail.php?id_sewa=$id_pinjam");
	}
} else {
	header("Location:index.php");
}