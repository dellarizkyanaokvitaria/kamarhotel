<?php  
include '../koneksi.php';
include 'fungsi-transaksi.php';

$id_pinjam = $_POST['id_sewa'];
$tgl_pinjam = $_POST['tgl_sewa'];
$tgl_jatuh_tempo = date('Y-m-d', strtotime($tgl_pinjam.'+7 days'));
$tgl_kembali = NULL;
$bayar = NULL;
if(isset($_POST['tgl_kembali'])){
  $tgl_kembali = $_POST['tgl_kembali'];
  mysqli_query($koneksi, "UPDATE detail_sewa SET tgl_kembali='$tgl_kembali' WHERE id_sewa=$id_pinjam");
  mysqli_query($koneksi, "UPDATE penyewaan SET tgl_sewa='$tgl_pinjam',tgl_jatuh_tempo='$tgl_jatuh_tempo' WHERE id_sewa=$id_pinjam");   
}else{
  mysqli_query($koneksi, "UPDATE penyewaan SET tgl_sewa='$tgl_pinjam',tgl_jatuh_tempo='$tgl_jatuh_tempo' WHERE id_sewa=$id_pinjam"); 
  
}
$count = mysqli_affected_rows($koneksi);

if($count == 1){
  $denda = hitungBayar($koneksi, $id_pinjam, $tgl_kembali);
  echo $denda;
  $sql = "UPDATE penyewaan SET denda=$denda WHERE id_sewa=$id_pinjam";
  $res = mysqli_query($koneksi, $sql);
  header("Location: index.php");
}else{
  header("Location: index.php");
}