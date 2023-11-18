<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
     <!--Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <!--custom css file link-->
     <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <!--Header section starts-->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">UD EKA SARI</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="produk.php">Products</a>
        </nav>
    </header>
     <!--Header section ends-->


     <!--Home section starts-->
     <section class="home" id="home">
        <div class="content">
            <h3>Selamat Datang Di Toko Bumbu UD EKA SARI</h3>
        </div>
     </section>


    <!--Home section ends-->


  <!--About section starts-->
<section class="about" id="about">
    <h1 class="heading"><span>About</span> Us</h1>
    <div class="row">
        <div class="video-container">
           <img src="images/foto maieka.jpg" alt="" width="350px">
            
        </div>
        <div class="content">
            <h3>why us?</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda nam cumque quasi autem blanditiis eaque laboriosam, neque alias sequi! Minus voluptatem expedita incidunt amet vel repellendus rem nisi minima animi?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quo illum perferendis sapiente iusto distinctio! Esse maxime laborum vero, eligendi, sint impedit nulla fugit fugiat qui harum sapiente natus cum.</p>
            

        </div>
    </div>
</section>

  <!--About section ends-->


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
                     <div class="icons">
                         <a href="#" class="fas fa-heart"></a>
                         <a href="https://api.whatsapp.com/send?phone=6281384166485&text=Assalamualaikum%20Saya%20Mau%20Order" class="cart-btn">Beli Sekarang</a>
                         <a href="#" class="fas fa-share"></a>
                     </div>
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


<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#">products</a>
        </div>
        
        <div class="box">
            <h3>Locations</h3>
            <a href="#">Bekasi, Indonesia</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+62 81384166485</a>
            <a href="#">maiekasari12@gmail.com</a>
          <img src="images/payment.png" alt="">
       
        </div>
    </div>
    <div class="credit">
        &copy; Made by <span>Maieka Sari Istiqomah</span>
    </div>
</section>

<!--footer section ends-->






</body>
</html>