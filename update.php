<?php 
include 'koneksi.php';
$id             = $_POST['id'];
$sp             = $_POST['SP'];
$colli          = $_POST['colli'];
$beratbarang    = $_POST['berat_barang'];
$franco         = $_POST['franco'];
$confrankert    = $_POST['confrankert'];
$penerima_barang = $_POST['penerima_Barang'];
$keterangan     = $_POST['keterangan'];

mysqli_query($mysqli, "UPDATE tb_data SET SP='$sp', colli='$colli', berat_barang='$beratbarang', franco='$franco',
 confrankert='$confrankert', penerima_barang='$penerima_barang', keterangan='$keterangan' WHERE id='$id'");

header("location:index.php?pesan=input");
?>