<?php 
    include 'koneksi.php';
    $sp = $_POST['sp'];
    $colli = $_POST['colli'];
    $beratBarang = $_POST['beratBarang'];
    $franco = $_POST['franco'];
    $confrankert = $_POST['confrankert'];
    $penerima = $_POST['penerima'];
    $ket = $_POST['ket'];


    mysqli_query($mysqli, "INSERT INTO tb_data VALUES('','$sp','$colli','$beratBarang','$franco','$confrankert','$penerima','$ket')");

    header("location:index.php?pesan=input");
    ?>