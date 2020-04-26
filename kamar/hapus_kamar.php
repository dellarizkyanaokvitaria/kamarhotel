<?php

$koneksi = mysqli_connect("localhost", "root", "", "kamar_hotel");

$id_kamar = $_GET["id_kamar"];

$query = mysqli_query($koneksi,
 "DELETE FROM kamar where id_kamar=$id_kamar");

//var_dump($query);
if($query>0){
    echo " <script> alert('Data Berhasil dihapus'); document.location.href = 'index.php'; </script> ";
}
?>