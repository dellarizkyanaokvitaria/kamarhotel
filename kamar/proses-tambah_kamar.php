<?php  
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$biaya_sewa 		 = $_POST['biaya_sewa'];
	$id_kategori = $_POST['id_kategori'];
	$stok 		 = $_POST['stok'];
	$model 		 = $_POST['model'];

	$sql = "INSERT INTO kamar(biaya_sewa, id_kategori, stok, model) VALUES ('$biaya_sewa', '$id_kategori', '$stok', '$model')";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di tambah !!!');
			document.location.href='index.php';
			</script>
		";
	}
}
?>