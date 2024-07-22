<?php
include '../koneksi.php';

$id_kontak = $_POST['id_kontak'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];


// if($_FILES['foto']['name']==''){
//     // jika gambar kosong
//     $namafile= $_POST['foto_lama'];
// }else{
//     // ambil data file
//     $namafile = $_FILES['foto']['name'];
//     $namaSementara= $_FILES['foto']['tmp_name'];

//     $terupload = move_uploaded_file($namaSementara, '../assets/images/user/' . $namafile);
// }

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file



$update = mysqli_query($koneksi, "UPDATE kontak SET judul='$judul', isi='$isi' WHERE id_kontak='$id_kontak'");

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