<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$q= mysqli_fetch_array($data); 

if (mysqli_num_rows($data)> 0) {
    $_SESSION['username'] = $q['username'];
    $_SESSION['password'] = $q['password'];
    header("location:main.php");
}else{ 
    header("location:index.php?pesan=gagal");
}

?>