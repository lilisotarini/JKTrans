<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($mysqli,"DELETE FROM tb_data WHERE id='$id'")or die(mysql_error());
 
header("location:index.php?pesan=hapus");
?>