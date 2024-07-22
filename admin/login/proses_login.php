<?php
include '../koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];

// cek apakah data yang diinputkan sudah sesuai database

$user= mysqli_query($koneksi, "SELECT * FROM user WHERE  username='$username' AND password='$password'");

// cek jumlah data yang masuk dari query

if(mysqli_num_rows($user)>0){
//pecah datanya
$data= mysqli_fetch_array($user);

if($data['level']=="admin"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    header('location:../?page=home/index');
} elseif ($data['level']=="member"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "member";
    header('location:../../?page=home/index');
}

session_start();
$_SESSION['id_user']=$data['id_user'];
$_SESSION['username']=$data['username'];
$_SESSION['nama_lengkap']=$data['nama_lengkap'];
$_SESSION['foto']=$data['foto'];

echo "<script>
alert('login berhasil')
window.location.href='../index.php'
</script>";
}else{
    echo "<script>
    alert('username atau password salah')
    window.location.href='index.php'
    </script>";
}
?>