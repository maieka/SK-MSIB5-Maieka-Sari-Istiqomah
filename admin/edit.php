<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    h1 {
        text-align: center;
        font-size: 24px;
        margin-top: 5px;
    }

    form {
        width: 100%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px;
    }

    input[type="text"],
    input[type="text"],
    input[type="text"],

    input[type="submit"] {
        background-color: #228B22;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .error-message {
        color: red;
    }
</style>

<body>
    <?php
    include 'koneksi.php';
    $id_produk = $_GET['id_produk'];
    $produk = mysqli_query($conn, "SELECT * from produk where id_produk='$_GET[id_produk]'");

    while ($p = mysqli_fetch_array($produk)) {
        $id_produk = $p["id_produk"];
        $nama_produk = $p["nama_produk"];
        $harga = $p["harga"];
        $gambar = $p["gambar"];
    }
    ?>

    <div class="container col-md-6 mt-4">
            <h1></h1>
            <div class="card">
                <div class="card-header bg-success text-white">
                    Edit Produk
                </div>
                <div class="card-body">
                    <form action="update_produk.php?id=<?php echo $id_produk ?>" method="post" enctype="multipart/form-data">
                        <table>

                            <tr>
                                <td>id_produk</td>
                                <td>:</td>
                                <td><input type="text" name="id_produk" value="<?php echo $id_produk ?>"></td>
                            </tr>

                            <tr>
                                <td>Nama Produk</td>
                                <td>:</td>
                                <td><input type="text" name="nama_produk" value="<?php echo $nama_produk ?>"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td><img src="images/<?php echo $gambar; ?>" width="70"></td>
                            </tr>

                            <tr>
                                <td>Gambar</td>
                                <td>:</td>
                                <td>
                                    <input type="file" id="gambar" name="gambar">
                                    <!-- Display the current image -->
                                </td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><input type="text" name="harga" value="<?php echo $harga ?>"></td>
                            </tr>

                        </table>
                        <input type="submit" name="Submit" value="Simpan">
                    </form>
                </div>
            </div>

</body>

</html>