<?php
include '../koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$nama_lengkap=$_POST['nama_lengkap'];
$level='member';

//ambil data file
$namafile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/user/' . $namafile);

// cek apakah data yang diinputkan sudah sesuai database
$tambah = mysqli_query($koneksi, "INSERT INTO user (username,password,nama_lengkap,level,foto) 
VALUES ('$username','$password','$nama_lengkap','$level','$namafile')");


// cek jumlah data yang masuk dari query

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='index.php'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='index.php'
        </script>";
    }

?>