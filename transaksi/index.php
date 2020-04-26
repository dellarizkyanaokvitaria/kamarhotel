<?php
include '../koneksi.php';

$sql = "SELECT * FROM penyewaan INNER JOIN pelanggan ON penyewaan.id_pelanggan=pelanggan.id_pelanggan INNER JOIN detail_sewa ds USING(id_sewa) INNER JOIN petugas ON penyewaan.id_petugas=petugas.id_petugas ORDER BY penyewaan.tgl_sewa";

$res = mysqli_query($koneksi, $sql);

$sewa = array();

while ($data = mysqli_fetch_assoc($res)) 
{
  $sewa[] = $data;
}


?>
<?php
include '../aset/header.php';
?>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"><i class="fas fa-edit"></i> Data Penyewaans <a href="form-sewa.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a>
          </h2>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Day</label>
            </div>
            <select class="custom-select " id="inputGroupSelect01">
              <option value="" selected>Choose</option>
              <option value="1">Yesterday</option>
              <option value="3">Three days ago</option>
              <option value="7">A week ago</option>
            </select>
            <form class="form-inline my-2 my-lg-0 ml-5">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="key">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
          <div class="ser">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Penyewaan</th>
                  <th scope="col">Tanggal Sewa</th>
                  <th scope="col">Tanggal Jatuh Tempo</th>
                  <th scope="col">Petugas</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <?php
              $no = 1;
              foreach ($sewa as $p) { 
                ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                  <td><?= $p['nama'] ?></td>
                  <td><?= date('d F Y', strtotime($p['tgl_sewa'])) ?></td>
                  <td><?= date('d F Y', strtotime($p['tgl_jatuh_tempo'])) ?></td>
                  <td><?= $p['nama_petugas'] ?></td>
                  <td>
                    <?php
                    if ($p['status'] == "disewa") {
                      echo '<h5><span class="badge badge-info">Dipinjam</span></h5>';
                    } else {
                      echo '<h5><span class="badge badge-info">Kembali</span></h5>';
                    }
                    ?>
                  </td>
                  <td>
                    <a href="detail.php?id_sewa=<?= $p['id_sewa'] ?>" class="badge badge-success">Detail</a>
                    <a href="form-edit.php?id_sewa=<?= $p['id_sewa'] ?>" class="badge badge-warning">Edit</a>
                    <a href="hapus.php?id_sewa=<?= $p['id_sewa'] ?>" class="badge badge-danger">Hapus</a>
                  </td>
                </tr>
              <?php
                $no++;
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="search.js"></script>
</div>


<?php
include '../aset/footer.php';
?>