<?php
$conn= mysqli_connect("localhost", "root", "", "db_bumbu");

if (mysqli_connect_error()){
    echo "Gagal Koneksi Database: ".mysqli_connect_error();
}
?>