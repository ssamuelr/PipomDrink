<?php 
	include "koneksi.php" ;
    $id = $_POST['id'];
	$foto = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'] ;
	$nama = $_POST['nama'] ;
	$harga = $_POST['harga'] ;
	move_uploaded_file($file_tmp, 'file/'.$foto) ;
	$query = "UPDATE daftar_menu SET 
								    nama = '$nama',
									harga = '$harga',
								    foto = '$foto'
                                    WHERE
                                    id = '$id'
	";
	mysqli_query($koneksi, $query) or die("SQL Error " .mysqli_error());
	header('location:admin_index.php');
?>