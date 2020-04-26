<?php
include'../koneksi.php';
if(isset($_POST["simpan"]))
{
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$telp=$_POST['telp'];
$username=$_POST['username'];
$password=$_POST['password'];
$id_level=3;

$sql="INSERT INTO pelanggan(nama,jenis_kelamin,telp,username,password,id_level) VALUES('$nama','$jenis_kelamin','$telp','username','$password','$id_level')";

	$res=mysqli_query($koneksi,$sql);

	$count=mysqli_affected_rows($koneksi);

	if($count==1)
		{
			header("Location: index.php");
		}
else{
	var_dump($sql);die;
	header("Location: tambah.php");
}
}
?>