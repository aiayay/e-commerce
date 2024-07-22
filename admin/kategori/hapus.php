<?php
include '../koneksi.php';

$id_kategori = $_GET['id_kategori'];

$hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=kategori/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=kategori/index';
			</script>";
}
?>