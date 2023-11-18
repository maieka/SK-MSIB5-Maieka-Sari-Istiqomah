<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!--Font awesome cdn link-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <!--custom css file link-->
      <link rel="stylesheet" href="style.css"> 
</head>
<body>
<?php
?>
    <!--Products section stars-->

<section class="products" id="products">
    <h1 class="heading"><span>products</span></h1>
    <div class="box-container">

        <?php
        include "../admin/koneksi.php";

        $result = mysqli_query($conn, "SELECT * FROM produk");

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="box">
                 <div class="image">
                     <img src="images/' . $row['gambar'] . '" alt="">
                 </div>
                 <div class="content">
                     <h3>' . $row['nama_produk'] . '</h3>
                     <div class="price">Rp. ' . number_format($row['harga'], 0, ',', '.') . '</div>
                 </div>
             </div>';
        }

        mysqli_close($conn);
        ?>

    </div>
</section>

<!--Products section ends-->
    
</body>
</html>

