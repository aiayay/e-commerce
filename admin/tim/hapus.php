<?php
include '../koneksi.php';

$id_tim = $_GET['id_tim'];

$hapus = mysqli_query($koneksi, "DELETE FROM tim WHERE id_tim='$id_tim'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=tim/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=tim/index';
			</script>";
}
?>