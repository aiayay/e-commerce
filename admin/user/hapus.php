<?php
include '../koneksi.php';

$id_user = $_GET['id_user'];

$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_user'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=user/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=user/index';
			</script>";
}
?>