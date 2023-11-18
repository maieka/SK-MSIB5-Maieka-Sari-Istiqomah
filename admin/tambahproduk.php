<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Maieka </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
</head>
<body>
	<div class="container col-md-6 mt-4">
		<h1></h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Produk
			</div>
			<div class="card-body">
				<form action="" method="post" id="mytable" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" required="" class="form-control">
						
					</div>

					<div class="form-group">
						<label>Gambar</label>
						<input type="file" class="form-control" id="gambar" name="gambar">
					</div>

					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>
					<br>

					<button type="submit" class="btn btn-primary" name="submit">Simpan data</button>

				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$id_produk = $_POST['id_produk'];
					$nama_produk = $_POST['nama_produk'];
					$gambar = $_FILES['gambar']['name'];
					$harga = $_POST['harga'];
					
					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$data = mysqli_query($conn, "insert into produk (id_produk,nama_produk,gambar,harga)values('$id_produk', '$nama_produk', '$gambar','$harga')") or die(mysqli_error($conn));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis
					
					header("Location:index.php");
				}

				
				?>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</body>

</html>