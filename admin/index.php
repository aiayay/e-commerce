
<?php
session_start();
//jika sudah login

if(!isset($_SESSION['id_user'])){
echo "<script>
alert('Harap login terlebih dahulu')
window.location.href='login/index.php'
</script>";
}


include "koneksi.php";
include "layout/header.php";
include "layout/navbar.php";
include "content.php";
include "layout/footer.php";
?>