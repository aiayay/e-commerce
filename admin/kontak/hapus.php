<?php
include '../koneksi.php';

$id_kontak = $_GET['id_kontak'];

$hapus = mysqli_query($koneksi, "DELETE FROM kontak WHERE id_kontak='$id_kontak'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=kontak/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=kontak/index';
			</script>";
}
?>