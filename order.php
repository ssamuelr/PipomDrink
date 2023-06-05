<?php 
	include "koneksi.php" ;
	$nama = $_POST['nama'] ;
	$banyak = $_POST['banyak'] ;
    $alamat = $_POST['alamat'] ;
	$query = "INSERT INTO duit SET 
								    nama = '$nama',
									banyak = '$banyak',
                                    alamat = '$alamat'
	";
	mysqli_query($koneksi, $query) or die("SQL Error " .mysqli_error());
	header('location:index.php');
?>