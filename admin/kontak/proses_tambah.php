<?php
include '../koneksi.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];

// $username = $_POST['username'];
// $password = $_POST ['password'];
// $nama_lengkap = $_POST ['nama_lengkap'];
// $no_hp = $_POST ['no_hp'];

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file

// $terupload = move_uploaded_file($namaSementara, '../assets/images/user/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO kontak (judul,isi) 
VALUES ('$judul','$isi')");

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