<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
   
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" media="print" onload="this.media='all'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style type="text/css">
        body{
    font-family: 'roboto';
    color: #000;
}

.judul{
    background: #b8b5ff;
    padding: 10px;
    text-align: center;

}

.judul h1,h2,h3{
    height: 15px ; padding: 20px;           
}

a{
    /*color: #fff;*/
    padding: 5px;
    text-decoration: none;  
}


.table{
    border-collapse: collapse;
    margin-left:  50px;
    margin-right: 50px;
    width: 60%;
}

table.table th th , table.table tr td{
    padding: 10px 20px  ;
}
*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
    </style>
</head>
<body data-rsssl=1>
    <div class="judul">     
        <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
    </div>
    <br/>
    
        <?php 
        if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
        echo "Data berhasil di input.";
        }else if($pesan == "update"){
        echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
        echo "Data berhasil di hapus.";
        }
        }
    ?>
    <br/>
    <a class="tombol" href="tambah.php">+ Tambah Data Baru</a>
    <h3>Data user</h3>
    <table border="1" class="table">
        <tr>
            <th bgcolor="yellow">Id</th>
            <th bgcolor="yellow">SP</th>
            <th bgcolor="yellow">Colli</th>
            <th bgcolor="yellow">Berat Barang</th>
            <th bgcolor="yellow">Franco</th>
            <th bgcolor="yellow">Confrankert</th>
            <th bgcolor="yellow">Penerima</th>
            <th bgcolor="yellow">Keterangan</th>
            <th bgcolor="yellow">Opsi</th> 
        </tr>
    <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM tb_data");
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td> <?php echo $data['id']; ?> </td>
            <td> <?php echo $data['SP']; ?> </td>
            <td> <?php echo $data['colli']; ?> </td>
            <td> <?php echo $data['berat_barang']; ?> </td>
            <td> <?php echo $data['franco']; ?> </td>
            <td> <?php echo $data['confrankert']; ?> </td>
            <td> <?php echo $data['penerima_barang']; ?> </td>
            <td> <?php echo $data['keterangan']; ?> </td>
            <td>
            <a class="edit" href="edit.php?id= <?php echo $data['id']; ?>">Edit</a> |
            <a class="hapus" href="hapus.php?id= <?php echo $data['id']; ?>">Hapus</a> 
            </td>
        </tr>
        <?php  } ?>
    </table>
</body>
</html>