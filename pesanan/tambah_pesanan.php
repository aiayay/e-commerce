<?php

session_start();
include '../koneksi.php';


$id_user = $_SESSION['id_user'];
$no_tujuan = $_POST['no_tujuan'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$realalamat = $_POST['alamatsaya'];
$alamatlengkap = $alamat_tujuan . " " . $realalamat;
date_default_timezone_set('Asia/Jakarta');

$date = date('Y-m-d');

$namafile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];

$terupload = move_uploaded_file($namaSementara, '../admin/assets/images/bukti_bayar/' . $namafile);
$keranjangdata = "SELECT * FROM keranjang join produk on produk.id_produk = keranjang.id_keranjang where";
$pesanan = mysqli_query($koneksi, "INSERT INTO pesanan (id_user, tgl_pesanan, no_tujuan, alamat_tujuan, bukti_bayar, status_pesanan)
VALUES ('$id_user', '$date','$no_tujuan','$alamatlengkap','$namafile','pending')");

$datapesanan = mysqli_query($koneksi, "SELECT * FROM pesanan ORDER BY id_pesanan DESC LIMIT 1");
$arrpesanan = mysqli_fetch_array($datapesanan);

$datakeranjang = mysqli_query($koneksi, "SELECT * FROM keranjang join produk on keranjang.id_produk = produk.id_produk where id_user = '$id_user'");
$totalharga = 0;
while ($keranjang = mysqli_fetch_array($datakeranjang)){
    $totalharga += $keranjang['harga']* $keranjang['kuantitas'];
    $detailpesanan = mysqli_query($koneksi, "INSERT INTO detail_pesanan (id_pesanan, id_produk,kuantitas,total_harga) VALUES ('$arrpesanan[id_pesanan]','$keranjang[id_produk]','$keranjang[kuantitas]','$totalharga')");
}



$deletequery = mysqli_query($koneksi, "DELETE FROM keranjang where id_user ='$id_user'");
if ($deletequery){
    echo "<script>
    alert ('berhasil check out keranjang')
    window.location.href='../?page=shop/index';
    </script>";
}else {
    echo "<script>
    alert ('gagal check out keranjang')
    window.location.href = '../?page=shop/index';
    </script>";
}


// $id_pesanan = $_POST['id_pesanan'];
// $id_produk = $_POST['id_produk'];
// $kuantitas = $_POST['kuantitas'];
// $total_harga = $_POST['total_harga'];




// $tambah = mysqli_query($koneksi, "INSERT INTO detail_pesanan (id_pesanan, id_produk, kuantitas, total_harga) 
// VALUES ('$id_pesanan','$id_produk','$kuantitas','$total_harga')");

// if ($tambah){
//     echo "<script>
//     alert ('data berhasil ditambahkan')
//     window.location.href='../?page=home/index'
//     </script>";
//    }   else {
//         echo "<script>
//         alert ('data gagal ditambahkan')
//         window.location.href='../?page=home/index'
//         </script>";
//     }

?>








