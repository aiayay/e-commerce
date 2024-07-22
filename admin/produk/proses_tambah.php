<?php
include '../koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST ['nama_produk'];
$deskripsi = $_POST ['deskripsi'];
$harga = $_POST ['harga'];

// $slug = str_replace('+','-', urlencode($nama_produk));

//ambil data file
$namafile = $_FILES['foto_produk']['name'];
$namaSementara = $_FILES['foto_produk']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/produk/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO produk (id_kategori,nama_produk,deskripsi,harga,foto_produk) 
VALUES ('$id_kategori','$nama_produk','$deskripsi','$harga','$namafile')");

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=produk/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=produk/index'
        </script>";
    }

?>