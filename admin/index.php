<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Website Crud Maieka</title>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav ms-auto 2">
      <div class="navbar-nav">
        <a class="nav-link  active" aria-current="page" href="../user/index.php">Product</a>
    </div>
  </div>
</nav>
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
          <div class="card-header bg-success text-white">
           
              DATA PRODUCT
            </div>
            <div class="card-body">
              <a href="tambahproduk.php" class="btn btn-md btn-success" style="margin-bottom: 10px">+ TAMBAH PRODUK</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID PRODUK</th>
                    <th scope="col">NAMA PRODUK</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($conn,"SELECT * FROM produk");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_produk'] ?></td>
                      <td><img src="images/<?= $row["gambar"]; ?>" height="100"></td>
                      <td>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></td>
                      <td>
								      <a href="edit.php?id_produk=<?= $row['id_produk']; ?>" class="btn btn-sm btn-warning">Edit</a>
								      <a href="hapus.php?id_produk=<?= $row['id_produk']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah yakin data akan dihapus?');">Hapus</a>
						      </td>
					      </tr>


                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>