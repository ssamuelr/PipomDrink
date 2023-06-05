<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM daftar_menu WHERE id = '$_GET[id]'");
$row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<style>
		.product-image {
			width: 200px;
			height: 200px;
			object-fit: cover;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="col-md-12 text-center">
					<h2>Checkout</h2>
					<p>Pastikan informasi checkout Anda benar.</p>
				</div>
				<div class="col-md-12 mt-5">
					<div class="card">
						<img src="file/<?php echo $row['foto']; ?>" class="card-img-top product-image" alt="Produk">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['nama']; ?></h5>
							<p class="card-text">Harga: <?php echo $row['harga']; ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-5">
					<form method="post" action="order.php">
						<input type="hidden" name="nama" value="<?php echo $row['nama']; ?>">
						<div class="form-group">
							<label class="form-label">Kuantitas:</label>
							<input type="number" class="form-control" name="banyak">
						</div>
                        <div class="form-group">
							<label class="form-label">Alamat:</label>
							<input type="text" class="form-control" name="alamat">
						</div>
						<button type="submit" class="btn btn-primary">Checkout</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
