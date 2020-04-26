<?php

$koneksi = mysqli_connect("localhost", "root", "", "kamar_hotel");

$id_pelanggan = $_GET["id_pelanggan"];

$query = mysqli_query($koneksi,
 "DELETE FROM pelanggan where id_pelanggan=$id_pelanggan");

//var_dump($query);
if($query>0){
    echo " <script> alert('Data Berhasil dihapus'); document.location.href = 'index.php'; </script> ";
}
?>