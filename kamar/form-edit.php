<?php

include '../aset/header.php';
include '../koneksi.php';

$id_kamar = $_GET['id_kamar'];
$sql = mysqli_query ($koneksi,"SELECT * FROM kamar WHERE id_kamar = '$id_kamar'");
$detail = mysqli_fetch_assoc($sql);
$query = mysqli_query($koneksi,"SELECT * FROM  kategori ");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Kamar</h3>
                      </div>
                      <form  action="proses-edit.php" method="post">
                          <table class="table">
                                  <tr>
                                        <input type="hidden" name="id_kamar" value="<?php echo $detail['id_kamar'] ?>">
                                        <td><strong>Biaya Sewa</strong></td>
                                        <td><input type="text" name = "biaya_sewa" value="<?php echo $detail ["biaya_sewa"] ?>"></td>
                                  </tr>
                                        <tr>
                                          <td><strong>Kategori</strong></td>
                                          <td>  <select style="width : 100%" name="kategori">

                                            
                                                <?php
                                                 while ($kategori =mysqli_fetch_assoc($query)):
                                                    ?>
                                              <option value="<?php echo $kategori["id_kategori"];?>">
                                                <?php echo $kategori["kategori"];?></option>
                                            <?php endwhile; ?>
                                            </select></td>
                                        </tr>


                        </table>
                        <div class="">
                          <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>

                        </div>
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