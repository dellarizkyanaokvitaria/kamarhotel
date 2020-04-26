<?php  
include '../koneksi.php';
include 'fungsi-transaksi.php';

session_start();

if(isset($_POST['btnPinjam'])){
    $id_kamar = $_POST['id_kamar'];
    $id_pelanggan         = $_POST['id_pelanggan'];
    $tgl_sewa         = $_POST['tgl_sewa'];
    $tgl_jatuh_tempo    = date('Y-m-d', strtotime($tgl_sewa.'+ 7 days'));
    $id_petugas         = $_SESSION['id_petugas'];

  //  $sql = "INSERT INTO peminjaman(id_anggota, tgl_pinjam, tgl_jatuh_tempo, id_petugas) VALUES('$id_anggota', '$tgl_pinjam', '$tgl_jatuh_tempo', '$id_petugas')";
    
   // $sql = "INSERT INTO peminjaman VALUES($id_anggota', '$tgl_pinjam', '$tgl_jatuh_tempo', '$id_petugas')";

    $sql = "INSERT INTO penyewaan(id_pelanggan,tgl_sewa,tgl_jatuh_tempo, id_petugas)
    VALUES ('$id_pelanggan','$tgl_sewa','$tgl_jatuh_tempo', '$id_petugas')";

$stok= ambilStok($koneksi,$id_kamar); //ambil data stok buku

    if(cekSewa($koneksi, $id_pelanggan) && $stok > 0){
        $res = mysqli_query($koneksi, $sql);
        $querp=mysqli_query($koneksi,"SELECT id_sewa FROM penyewaan WHERE tgl_sewa='$tgl_sewa' AND id_pelanggan='$id_pelanggan' AND tgl_jatuh_tempo='$tgl_jatuh_tempo' AND id_petugas='$id_petugas' ");
        $wd=mysqli_fetch_assoc($querp);

        $idp=$wd["id_sewa"];

        $sql1 = mysqli_query($koneksi,"INSERT INTO detail_sewa(id_sewa,id_kamar,tgl_kembali,status) values('$idp','$id_kamar','$tgl_sewa','disewa')");
        $count = mysqli_affected_rows($koneksi);
        $stok_update = $stok - 1;
         //if($count == 2){
		 	//updateStok($koneksi, $id_kamar, $stok_update);
		 	//header("Location:index.php");
		//}
    }
    if(cekSewa($koneksi, $id_pelanggan)==false){
        updateStok($koneksi, $id_kamar, $stok_update);
        header("Location:index.php");
    }
}else{
    header("Location:form-pinjam.php");
}
?>