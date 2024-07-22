<?php
include '../koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];






$update = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='../?page=kategori/index'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='../?page=kategori/index'
        </script>";
    }

?>