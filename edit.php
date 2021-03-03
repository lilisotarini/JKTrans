<!DOCTYPE html>
<html>
<head>
	<title>JK Trans</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" media="print" onload="this.media='all'">
</head>
<body data-rsssl=1>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($mysqli, "SELECT * FROM tb_data WHERE id='$id'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>SP</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="SP" value="<?php echo $data['SP'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Colli</td>
				<td><input type="text" name="colli" value="<?php echo $data['colli'] ?>"></td>					
			</tr>	
			<tr>
				<td>Berat Barang</td>
				<td><input type="text" name="berat_barang" value="<?php echo $data['berat_barang'] ?>"></td>					
			</tr>
            <tr>
				<td>Franco</td>
				<td><input type="text" name="franco" value="<?php echo $data['franco'] ?>"></td>					
			</tr>
            <tr>
				<td>Confrankert</td>
				<td><input type="text" name="confrankert" value="<?php echo $data['confrankert'] ?>"></td>					
			</tr>
            <tr>
				<td>Penerima Barang</td>
				<td><input type="text" name="penerima_Barang" value="<?php echo $data['penerima_barang'] ?>"></td>					
			</tr>
            <tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>