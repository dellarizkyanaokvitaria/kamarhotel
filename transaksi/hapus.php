<?php

$koneksi = mysqli_connect("localhost", "root", "", "kamar_hotel");

$id_pinjam = $_GET["id_sewa"];

$query = mysqli_query($koneksi,
 "DELETE FROM detail_sewa where id_sewa=$id_pinjam");

$query1 = mysqli_query($koneksi,
 "DELETE FROM penyewaan where id_sewa=$id_pinjam");

//var_dump($query);
if($query>0){
    echo " <script> alert('Data Berhasil dihapus'); document.location.href = 'index.php'; </script> ";
}
?>