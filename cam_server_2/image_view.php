<?php
include('koneksi.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($koneksi,"select * from tb_cam_server where id='".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    
    echo $row["image"];
}
else
{
    header('location:index.php');
}
?>