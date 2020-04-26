<?php
$koneksi= mysqli_connect("localhost","root","","kamar_hotel");


$sql ="SELECT * FROM pelanggan ORDER BY nama";

$res=mysqli_query($koneksi,$sql);

$pelanggan=array();

while ($data = mysqli_fetch_assoc($res)) {
  $pelanggan[] = $data;
}
?>


<?php
include'../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>    
    </div>
</div>

    <div class="container">
   <div class="row mt-4">
    <div class="col-md">
<div class= "card">
<div class="card-header">
 <h2 class="card-title"><i class="fas fa-user"></i> Data Pelanggan</h2>
          <a href="tambah.php" class="badge badge-info">Tambah Data</a>
   <div class="card-body">
    <table class="table table-dark">

  </div>
</div class="card-body">
<table class="table table-dark">
<thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">jenis_kelamin</th>
      <th scope="col">Aksi</th>

      
    </tr>
  </thead>
 <tbody>
  <?php
  $no=1;
  foreach($pelanggan as $a) { ?>

    <tr>
        <th scope="row"><?=$no?></th>
        <td><?=$a['nama'] ?></th>
        <td><?=$a['jenis_kelamin'] ?></td>
    </td>
    <td>
        <a href="detail.php?id_pelanggan=<?= $a['id_pelanggan'];?>" class="badge badge-success
         ">Detail</a>
        <a href="edit_pelanggan.php?id_pelanggan=<?= $a['id_pelanggan']; ?>" class="badge badge-warning
         ">Edit</a>
            <a href="hapus_pelanggan.php?id_pelanggan=<?= $a['id_pelanggan']; ?>" class="badge badge-danger
        ">Hapus</a>
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

<?php
include'../aset/footer.php';
?>