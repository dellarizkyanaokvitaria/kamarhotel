<?php  
function ambilKamar($koneksi){
	$sql = "SELECT * FROM kamar";
	$res = mysqli_query($koneksi, $sql);

	$data_kamar = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$data_kamar[] = $data;
	}
	return $data_kamar;
}
?>

<?php  
function ambilPelanggan($koneksi){
	$sql = "SELECT id_pelanggan, nama FROM pelanggan";
	$res = mysqli_query($koneksi, $sql);

	$data_pelanggan = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$data_pelanggan[] = $data;
	}
	return $data_pelanggan;
}
?>

<?php  
function ambilPenyewaan($koneksi, $id_sewa){
	$sql = "SELECT * FROM penyewaan p INNER JOIN pelanggan a ON p.id_pelanggan=a.id_pelanggan INNER JOIN detail_sewa dp USING(id_sewa) INNER JOIN kamar b ON dp.id_kamar=b.id_kamar where id_sewa='$id_sewa'" ;
	$res = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_assoc($res);

	return $data;
}
?>

<?php  
function ambilStok($koneksi, $id_kamar){
	$sql = "SELECT stok FROM kamar WHERE id_kamar=$id_kamar";
	$res = mysqli_query($koneksi, $sql);

	$data = mysqli_fetch_assoc($res);
	return $data['stok'];
}
?>

<?php  
function cekSewa($koneksi, $id_pelanggan){
	$sql = "SELECT * FROM penyewaan inner join detail_sewa using(id_sewa)  WHERE id_pelanggan=$id_pelanggan AND status='disewa'";
	$res = mysqli_query($koneksi, $sql);

	$sewa = mysqli_affected_rows($koneksi);

	if($sewa == 0){
		return true;
	}else{
		return false;
	}
}
?>

<?php  
function updateStok($koneksi, $id_kamar, $stok_update){
	$sql = "UPDATE kamar SET stok=$stok_update WHERE id_kamar=$id_kamar";
	$res = mysqli_query($koneksi, $sql);
}
?>

<?php  
function hitungBayar($koneksi, $id_sewa, $tgl_kembali){
	$bayar=0;

	$sql = "SELECT tgl_jatuh_tempo FROM penyewaan WHERE id_sewa=$id_sewa";
	$res = mysqli_query($koneksi, $sql);

	$data = mysqli_fetch_assoc($res);
	$tgl_jatuh_tempo = $data['tgl_jatuh_tempo'];

	$hari_denda = (strtotime($tgl_kembali)-strtotime($tgl_jatuh_tempo))/60/60/24;

	if($hari_denda >= 0){
		$bayar = $hari_denda*1000;
	}

	return $bayar;
}
?>