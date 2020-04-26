<?php 
include '../koneksi.php';
include '../aset/header.php';

include 'fungsi-transaksi.php';
$id_sewa = $_GET['id_sewa'];

$id_sewa = ambilPenyewaan($koneksi, $id_sewa);
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3>Edit Penyewaan</h3>
        </div>
        <div class="card-body">
          <form method="post" action="proses-edit.php">
            <div class="form-group">
              <label for="pelanggan">Nama Pelanggan</label>
              
              <input type="text" value="<?= $id_sewa['nama']?>" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="datepicker">Tanggal Sewa</label>
              <input type="date" name="tgl_sewa" value="<?=$id_sewa['tgl_sewa']?>" class="form-control">
            </div>
            <?php  
            if($id_sewa['status'] == "kembali"){?>
            <div class="form-group">
              <label for="datepicker">Tanggal Kembali</label>
              <input type="date" name="tgl_kembali" value="<?=$id_sewa['tgl_kembali']?>" class="form-control">
            </div>
            <?php
            }
            ?>
            <div class="form-group">
              <input type="hidden" name="id_sewa" value="<?=$id_sewa["id_sewa"]?>">
              <button type="submit" name="btnSewa" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php  
include '../aset/footer.php';
?>