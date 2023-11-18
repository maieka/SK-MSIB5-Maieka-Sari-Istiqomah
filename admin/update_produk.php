<?php 
include 'koneksi.php';

// get variable from form input
$id_produk = $_GET["id"];
$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];

if($_FILES["gambar"]["size"]!=0){   // Jika browse image di tekan maka $_FILES akan terisi
    $target_dir = "images/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
        echo "The file ". htmlspecialchars(basename($_FILES["gambar"]["name"])). " has been uploaded.<br>";
        $result = mysqli_query($conn, "UPDATE produk set nama_produk = '$nama_produk', harga = '$harga', gambar= '".str_replace("images/","",$target_file)."' where id_produk = '$_GET[id]'");
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}


$result = mysqli_query($conn, "UPDATE produk set nama_produk = '$nama_produk',harga = '$harga' where id_produk = '$_GET[id]'");

header("Location: index.php");
?>