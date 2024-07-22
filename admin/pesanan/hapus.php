<?php
include '../koneksi.php';

$id_pesanan = $_GET['id_pesanan'];

$hapus = mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=pesanan/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=pesanan/index';
			</script>";
}
?>