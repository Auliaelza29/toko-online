<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if($data['level'] == "petugas"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";
        $_SESSION['status_login']=true;
        //mengalihkan ke halaman petugas
        header("location: index.php");
    } else if ($data['level'] == "pelanggan"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pelanggan";
        $_SESSION['status_login']=true;
        //mengalihkan ke halaman pelanggan
        header("location: produk.php");
    } else {
        //mengalihkan ke halaman login kembali
        header("location: login.php?pesan=gagal login");
    }
} else {
    header("location:login.php?pesan=gagal");
}
?>