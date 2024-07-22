<?php
include '../koneksi.php';

$id_tim = $_POST['id_tim'];
$nama_tim = $_POST['nama_tim'];
$jabatan = $_POST ['jabatan'];

if($_FILES['foto']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['foto_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['foto']['name'];
    $namaSementara= $_FILES['foto']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/tim/' . $namafile);
}

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file



$update = mysqli_query($koneksi, "UPDATE tim SET nama_tim='$nama_tim', jabatan='$jabatan', foto='$namafile' 
WHERE id_tim='$id_tim'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='index.php'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='ubah.php'
        </script>";
    }

?>