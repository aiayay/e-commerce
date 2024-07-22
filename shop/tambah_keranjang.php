<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['id_user'])){
echo "<script>
alert('SILAHKAN LOGIN DULU');
window.location.href='../admin/login/index.php';
</script>";
}

$id_user = $_SESSION['id_user'];
$id_produk = $_POST['id_produk'];
$kuantitas = $_POST['kuantitas'];


$tambah = mysqli_query($koneksi, "INSERT INTO keranjang (id_user, id_produk,kuantitas) 
VALUES ('$id_user','$id_produk','$kuantitas')");



if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=shop/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=shop/index'
        </script>";
    }

?>