<?php

$koneksi = mysqli_connect("localhost", "root", "", "kamar_hotel");

if(isset($_POST['simpan']))
{
    $id_kamar = $_POST['id_kamar'];
    $biaya_sewa = $_POST['biaya_sewa'];
    $kategori= $_POST['kategori'];
    $model= $_POST['model'];

 $sl = "UPDATE kamar SET biaya_sewa='$biaya_sewa',id_kategori=$kategori where id_kamar=$id_kamar";
  $res = mysqli_query($koneksi,$sl);
  $count=mysqli_affected_rows($koneksi);
 if($count>0)
{
    echo
    "
    <script>
    alert('data berhasil di edit horeee!');
    document.location.href ='index.php';
    </script>
    ";
}
//var_dump(expression)
// else
// {
//     echo
//     "
//     <script>
//     alert('data berhasil di edit horeee!');
//     document.location.href ='index.php';
//     </script>
//     ";
// }
;
}

?>


