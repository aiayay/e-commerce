<?php
include '../koneksi.php';

$id_armada = $_GET['id_armada'];

$hapus = mysqli_query($koneksi, "DELETE FROM armada WHERE id_armada='$id_armada'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=armada/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=armada/index';
			</script>";
}
?>