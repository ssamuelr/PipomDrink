<!DOCTYPE html>
<html>
<head>
	<title>Input Menu Baru Pipom Drink</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-8 mt-4">
				<div class="col-md-12 mt-4">
					<h2>Input Menu Baru Pipom Drink</h2>
					By : <a>Samuel Restu</a>
				</div>
				<div class="container">
        			<h2>Data Duit</h2>
        			<table class="table">
            		<thead>
                		<tr>
							<th>ID Order</th>
							<th>Nama</th>
							<th>Banyak</th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
            		</thead>
            		<tbody>
                		<?php
							include "koneksi.php" ;
							$data = mysqli_query($koneksi, "SELECT * FROM duit order by idorder DESC") ;
							while ($row = mysqli_fetch_array($data)) {
						?>
                		<tr>
							<td><?php echo $row['idorder']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['banyak']; ?></td>
							<td><?php echo $row['alamat']; ?></td>
							<td>
                        		<a href="hapus_order.php?id=<?php echo $row['idorder']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                   		 	</td>
                		</tr>
                		<?php } ?>
            		</tbody>
        		</table>
    		</div>
				<div class="col-md-12 mt-4">
					<a href="form_upload.php" class="btn btn-success mb-4">Upload</a>
					<?php 
						include "koneksi.php" ;
						$data = mysqli_query($koneksi, "SELECT * FROM daftar_menu order by id DESC") ;
						while ($row = mysqli_fetch_array($data)) {
					?>

					<div class="col-md-12 row mb-5">
						<div class="col-md-3">
							<img src="file/<?php echo $row['foto'] ; ?>" style="width: 100%;">
						</div>
						<div class="col-md-9">
							<h2><?php echo $row['nama'] ; ?></h2>
							<h2><?php echo $row['harga'] ; ?></h2> 
							<a href="form_edit.php?id=<?php echo $row['id'] ; ?>" class="btn btn-dark">Edit</a>
							<a href="delete.php?id=<?php echo $row['id'] ; ?>" class="btn btn-danger">Delete</a>
						</div>
					</div>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>