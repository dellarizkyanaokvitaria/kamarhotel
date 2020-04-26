<?php  
include '../aset/header.php';
include '../koneksi.php';
include 'fungsi-transaksi.php';
$id_sewa = $_GET['id_sewa'];

$sql = "SELECT * FROM penyewaan p INNER JOIN detail_sewa dp ON p.id_sewa=dp.id_sewa INNER JOIN kamar b ON b.id_kamar=dp.id_kamar where p.id_sewa='$id_sewa'";

$res = mysqli_query($koneksi, $sql);
$detail = mysqli_fetch_assoc($res);
$tgl_kembali=$detail["tgl_kembali"];
if($tgl_kembali==null){
  $tgl_kembali=date("Y-m-d");
$bayar=hitungBayar($koneksi,$id_sewa,$tgl_kembali);
}else{
  $bayar=hitungBayar($koneksi,$id_sewa,$tgl_kembali);
}
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md-7">
      <h2>Detail Penyewaan</h2>
      <hr class="bg-ligth">
      <table class="table table-bordered">
        <tr>
          <td><strong>Biaya Sewa</strong></td>
          <td><?=$detail['biaya_sewa']?></td>
        </tr>
        <tr>
          <td><strong>Tanggal Sewa</strong></td>
          <td><?=date('d F Y', strtotime($detail['tgl_sewa']))?></td>
        </tr>
        <tr>
          <td><strong>Tanggal Jatuh Tempo</strong></td>
          <td><?=date('d F Y', strtotime($detail['tgl_jatuh_tempo']))?></td>
        </tr>
        <tr>
          <td><strong>Tanggal Kembali</strong></td>
          <td>
            <?php  
            if($detail['tgl_kembali']==NULL){
              echo '-';
            }else{
              echo date('d F Y', strtotime($detail['tgl_kembali']));
            }
            ?>
          </td>
        </tr>
        <tr>
          <td><strong>Status</strong></td>
          <td><?=$detail['status']?></td>
        </tr>
        <?php  
        if($bayar > 0){
        ?>
        <tr>
          <td class="table-danger" colspan="2">
            <strong>Total yang Harus Dibayar;</strong>Rp<?=$bayar?>
          </td>
        </tr>
        <?php  
        }
        ?>
        <tr>
          <td class="text-rigth" colspan="2">
            <a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>
            <a class="btn btn-primary<?php if($detail['tgl_kembali']!=NULL){echo "disabled";}?>" href="form-kembali.php?id_sewa=<?= $detail['id_sewa']?>&id_kamar=<?=$detail['id_kamar']?>" role="button">Form Pengembalian</a>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<?php  
include '../aset/footer.php';
?>