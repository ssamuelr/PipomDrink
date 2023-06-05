<?php 
	include "koneksi.php" ;
	$foto = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'] ;
	$nama = $_POST['nama'] ;
	$harga = $_POST['harga'] ;
	move_uploaded_file($file_tmp, 'file/'.$foto) ;
	$query = "INSERT INTO daftar_menu SET 
								    nama = '$nama',
									harga = '$harga',
								    foto = '$foto'
	";
	mysqli_query($koneksi, $query) or die("SQL Error " .mysqli_error());
	header('location:admin_index.php');
?>