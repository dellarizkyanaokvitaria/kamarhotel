<?php  
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $id_pelanggan      = $_POST['id_pelanggan'];
    $nama              = $_POST['nama'];
    $jenis_kelamin     = $_POST['jenis_kelamin'];
    $telp              = $_POST['telp'];
    $username          = $_POST['username'];
    $password          = $_POST['password'];
    $id_level          = $_POST['id_level'];
    

    $sql = "UPDATE pelanggan a INNER JOIN level l SET nama='$nama', jenis_kelamin='$jenis_kelamin', telp='$telp', username='$username', password='$password', a.id_level=l.id_level WHERE id_pelanggan=$id_pelanggan";

    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);
    // var_dump($count);
    if($res==1){
        echo "
            <script>
            alert('Data Berhasil Di Edit !!!');
            document.location.href='index.php';
            </script>
        ";
    }
  }
?>