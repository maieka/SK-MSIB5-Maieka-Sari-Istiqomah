<?php
//Get Data From URL
$data=$_GET['id_produk'];

//Koneksi 
$connect=mysqli_connect("localhost", "root", "", "db_bumbu");
$remove =mysqli_query($connect, "DELETE FROM produk WHERE id_produk='$data'");

header("Location:index.php");
?>