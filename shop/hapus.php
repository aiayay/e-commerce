<?php
include '../koneksi.php';

$id_keranjang = $_GET['id_keranjang'];

$hapus = mysqli_query($koneksi, "DELETE FROM keranjang WHERE id_keranjang='$id_keranjang'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=shop/keranjang';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=shop/keranjang';
			</script>";
}
?>