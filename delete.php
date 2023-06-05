<?php 
	include "koneksi.php";
	
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM daftar_menu WHERE id = '$id'");
	$row = mysqli_fetch_array($data);

	$foto = $row['foto'];
	if(file_exists('file/'.$foto))
	{
		unlink('file/'.$foto);
	}
	
	$query = "DELETE FROM daftar_menu WHERE id = '$id'";
	if(mysqli_query($koneksi, $query))
	{
		header('location:admin_index.php');
		exit;
	}
?>
