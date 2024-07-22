<?php
include '../koneksi.php';

$nama_tim = $_POST['nama_tim'];
$jabatan = $_POST ['jabatan'];


//ambil data file
$namafile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/tim/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO tim (nama_tim, jabatan, foto) 
VALUES ('$nama_tim','$jabatan', '$namafile')");

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