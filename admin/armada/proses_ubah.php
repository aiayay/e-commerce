<?php
include '../koneksi.php';

$id_armada = $_POST['id_armada'];
$nama_armada = $_POST['nama_armada'];
$harga = $_POST ['harga'];
$deskripsi = $_POST ['deskripsi'];

if($_FILES['gambar_armada']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['gambar_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['gambar_armada']['name'];
    $namaSementara= $_FILES['gambar_armada']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/armada/' . $namafile);
}

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file



$update = mysqli_query($koneksi, "UPDATE armada SET nama_armada='$nama_armada', harga='$harga', deskripsi='$deskripsi', gambar_armada='$namafile' 
WHERE id_armada='$id_armada'");

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