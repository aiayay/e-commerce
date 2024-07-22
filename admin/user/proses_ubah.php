<?php
include '../koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST ['password'];
$nama_lengkap = $_POST ['nama_lengkap'];
$level =$_POST['level'];

if($_FILES['foto']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['foto_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['foto']['name'];
    $namaSementara= $_FILES['foto']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/user/' . $namafile);
}

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file



$update = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', nama_lengkap='$nama_lengkap', level='$level', foto='$namafile' 
WHERE id_user='$id_user'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='../?page=user/index'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='../?page=user/ubah'
        </script>";
    }

?>