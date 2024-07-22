<?php
include '../koneksi.php';

$id_produk = $_POST['id_produk'];
$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST ['nama_produk'];
$deskripsi = $_POST ['deskripsi'];
$harga = $_POST ['harga'];

if($_FILES['foto_produk']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['foto_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['foto_produk']['name'];
    $namaSementara= $_FILES['foto_produk']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/produk/' . $namafile);
}

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file



$update = mysqli_query($koneksi, "UPDATE produk SET id_kategori='$id_kategori', nama_produk='$nama_produk', deskripsi='$deskripsi', harga='$harga', foto_produk='$namafile' 
WHERE id_produk='$id_produk'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='../?page=produk/index'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='../?page=produk/ubah'
        </script>";
    }

?>