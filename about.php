<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Tentang</h3>
   <p> <a href="home.php">Home</a> / Tentang </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>Mengapa Memilih Kami?</h3>
         <p>WorldBook menghadirkan berbagai buku berkualitas untuk semua usia dan minat. Suasana nyaman dan menyenangkan menanti Anda untuk menjelajahi koleksi kami dan menemukan buku favorit Anda!</p>
         <p>Kami berkomitmen untuk menciptakan suasana yang nyaman dan menyenangkan bagi para pecinta buku untuk menjelajahi koleksi kami dan menemukan buku favorit mereka berikutnya.</p>
         <a href="contact.php" class="btn">Hubungi Kami</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Customer Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/kayes.jpg" alt="">
         <p>Buku disini sangat menginspirasi! Alur ceritanya menarik dan penuh dengan pelajaran hidup. Sangat direkomendasikan.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kharisma Cahya</h3>
      </div>

      <div class="box">
         <img src="images/vonzy.jpg" alt="">
         <p>Kualitas cetakan dan kertasnya sangat bagus. Isi buku juga mudah dipahami dan bermanfaat. Worth every penny!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vonny Felicia</h3>
      </div>

      <div class="box">
         <img src="images/szy.jpg" alt="">
         <p>Pesanan saya sampai lebih cepat dari perkiraan. Buku dalam kondisi baik dan terbungkus rapi. Terima kasih!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sheryl Jesslyn</h3>
      </div>

      <div class="box">
         <img src="images/windah.jpg" alt="">
         <p>Harga buku ini sangat terjangkau dibandingkan dengan toko lainnya. Kualitasnya juga tidak kalah. Pasti akan beli lagi di sini</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Brando Franco</h3>
      </div>

      <div class="box">
         <img src="images/cely.png" alt="">
         <p>Jelas sekali ini adalah buku original dengan kualitas cetakan yang sangat baik. Tidak ada cacat sedikitpun.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Eldin Rahadian</h3>
      </div>

      <div class="box">
         <img src="images/kyy.jpg" alt="">
         <p>Buku dengan harga yang sangat bersahabat di kantong, tapi kualitasnya tetap terbaik. Tidak menyesal beli di sini!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hengky Gunawan</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/tere-liye.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tere Liye</h3>
      </div>

      <div class="box">
         <img src="images/Oda.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Eiichiro Oda</h3>
      </div>

      <div class="box">
         <img src="images/hirata.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Andrea Hirata</h3>
      </div>

      <div class="box">
         <img src="images/eka.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Eka Kurniawan</h3>
      </div>

      <div class="box">
         <img src="images/fuadi.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ahmad Fuadi</h3>
      </div>

      <div class="box">
         <img src="images/lestari.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dee Lestari</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>