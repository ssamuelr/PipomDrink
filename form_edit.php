<?php
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM daftar_menu WHERE id = '$_GET[id]'");
    $row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Menu Baru</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="col-md-12 text-center">
					<h2>Edit Menu Baru</h2>
					Pastikan menu baru diinput dengan benar
				</div>
				<div class="col-md-12 mt-5">
					<form enctype="multipart/form-data" method="post" action="edit_sukses.php">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<div class="mb-3">
						  <label class="form-label">Nama</label>
						  <input type="text" name="nama" class="form-control"  value="<?php echo $row['nama'] ; ?>"> 
						</div>

						<div class="mb-3">
						  <label class="form-label">Harga</label>
						  <input type="text" name="harga" class="form-control" value="<?php echo $row['harga'] ; ?>">
						</div>

						<div class="mb-3">
						  <label class="form-label">Foto</label>
						  <input type="file" name="foto" class="form-control">
						  <img src="file/<?php echo $row['foto']; ?>" class="img-thumbnail" width="100">
						</div>

						<div class="mb-3 text-end">
							<button type="submit" class="btn btn-success">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
