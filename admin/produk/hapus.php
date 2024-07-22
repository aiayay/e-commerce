<?php
include '../koneksi.php';

$id_produk = $_GET['id_produk'];

$hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=produk/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=produk/index';
			</script>";
}
?>