<?php 
include '../koneksi.php';

$sql = "SELECT * FROM kamar INNER JOIN kategori ON kamar.id_kategori=kategori.id_kategori";

$res = mysqli_query($koneksi, $sql);

$kamar = array();

while ($data = mysqli_fetch_assoc($res)) {
	$kamar[] = $data;
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
			    <h2 class="card-title"><i class="fas fa-book"></i> Data Kamar</h2>
			    <a href="tambah_kamar.php" class="badge badge-info">Tambah Data</a>
			  </div>
			  <div class="card-body">
			  	<table class="table table-dark">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Harga</th>
				      <th scope="col">Stok</th>
					  <th scope="col">Kategori</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <?php  
				  	$no = 1;
				  	foreach ($kamar as $b) {?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
					  <td><?=$b['biaya_sewa']?></td>
					  <td><?=$b['stok']?></td>
				      <td><?=$b['kategori']?></td>
				      <td>
				      	<a href="detail.php?id_kamar=<?= $b['id_kamar'];?>" class="badge badge-success">Detail</a>
						<a href="form-edit.php?id_kamar=<?= $b['id_kamar'];?>" class="badge badge-warning">Edit</a>
						<a href="hapus_kamar.php?id_kamar=<?= $b['id_kamar'];?>" class="badge badge-danger">Hapus</a>
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


<?php 
include '../aset/footer.php';
?>