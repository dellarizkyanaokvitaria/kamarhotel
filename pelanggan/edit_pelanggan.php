<?php  
include '../koneksi.php';
include '../aset/header.php';
$id_pelanggan = $_GET['id_pelanggan'];
$sql = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan=$id_pelanggan");

$query = "SELECT * FROM pelanggan a INNER JOIN level l ON a.id_level=l.id_level WHERE id_pelanggan=$id_pelanggan";
$res = mysqli_query($koneksi, $query);
$level = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Pelanggan</title>
</head>
<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h2><i class="fas fa-user-plus"></i>Edit Data Pelanggan</h2>
          </div>
          <div class="card-body">
            <form method="post" action="proses-edit.php">
              <table class="table">
                <?php  
                while ($pelanggan = mysqli_fetch_assoc($sql)):
                ?>
              <tr>
                <input type="hidden" name="id_pelanggan" value="<?php echo $pelanggan['id_pelanggan'];?>">
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $pelanggan['nama'];?>" required></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $pelanggan['jenis_kelamin'];?>" required></td>
              </tr>
              <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp" value="<?php echo $pelanggan['telp'];?>" required></td>
              </tr>
              <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $pelanggan['username'];?>" required></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $pelanggan['password'];?>" required></td>
              </tr>
              <?php  
              endwhile;
              ?>
              <tr>
                <td>Level</td>
                <td><input type="text" name="id_level" value="<?php echo $level['id_level'];?>" required></td>
              </tr>
              <tr>
                <td class="text-rigth" colspan="2">
                  <a href="indexanggota.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>
                </td>
                <td></td>
                <td><input type="submit" class="btn btn-primary" name="simpan" value="simpan"></td>
              </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php  
include '../aset/footer.php';
?>