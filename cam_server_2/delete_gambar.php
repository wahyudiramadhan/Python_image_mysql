<?php
if(isset($_GET['id']))
{
    include('koneksi.php');
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"delete from tb_cam_server where id='$id'");
}
header('location:main.php');
?>