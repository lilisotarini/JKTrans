<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br/>
 
    <a href="index.php">Lihat Semua Data</a>
 
    <br/>
    <h3>Input data baru</h3>
    <form action="prosesTambah.php" method="post"> 
        <table>
        <tr>
            <td>SP</td>
            <td><input type="text" name="sp"></td> 
        </tr> 
        <tr>
            <td>Colli</td>
            <td><input type="text" name="colli"></td> 
        </tr> 
        <tr>
            <td>Berat Barang</td>
            <td><input type="text" name="beratBarang"></td> 
        </tr> 
        <tr>
            <td>Franco</td>
            <td><input type="text" name="franco"></td> 
        </tr> 
        <tr>
            <td>Confrankert</td>
            <td><input type="text" name="confrankert"></td> 
        </tr> 
        <tr>
            <td>Penerima</td>
            <td><input type="text" name="penerima"></td> 
        </tr> 
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="ket"></td> 
        </tr> 
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td> 
        </tr> 
        </table>
    </form>
</body>
</html>

