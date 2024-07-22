<?php
include '../koneksi.php';

$nama_armada = $_POST['nama_armada'];
$harga = $_POST ['harga'];
$deskripsi = $_POST ['deskripsi'];


//ambil data file
$namafile = $_FILES['gambar_armada']['name'];
$namaSementara = $_FILES['gambar_armada']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/armada/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO armada (nama_armada, harga, deskripsi, gambar_armada) 
VALUES ('$nama_armada', '$harga', '$deskripsi','$namafile')");

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='index.php'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='tambah.php'
        </script>";
    }

?>