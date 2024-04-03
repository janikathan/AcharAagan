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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
<h3 style="color: black;">about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/pick.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>"Choose Us for Pickle Perfection!
<pre  style="font-size: 200%;">
-> Timeless Recipes
-> Premium Ingredients
-> Traditional Craftsmanship
-> Diverse Flavors
-> Unmatched Quality
-> Experience the Best in Every Bite with [AcharAagan]!"
</pre>



</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box"> 
         <img src="images/pic-1.png" alt="">
         <p>Absolutely love the pickles from AcharAagan! Amazing variety, easy ordering, and lightning-fast delivery. These pickles are the real deal – bursting with flavor and freshness. Highly recommend to all pickle enthusiasts out there!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ram</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Hands down the best pickles I've ever tasted! AcharAagan offers a fantastic selection, and each jar is packed with flavor. Super impressed with the quality and service!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lakhan</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Incredible pickles and impeccable service! I've been ordering from AcharAagan for months now, and they never disappoint. The taste is unmatched, and the ordering process is seamless. Love it</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Krishna</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Five stars all the way! AcharAngan delivers on taste, quality, and service. These pickles are a game-changer – perfect for snacking, sandwiches, or adding a zing to any meal. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rohan</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I can't get enough of the pickles from AcharAngan! Each jar is a burst of flavor, and the variety keeps me coming back for more. The ordering process is quick and easy, and the delivery is always prompt. A must-try for any pickle lover!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mohan</h3>
      </div>

     

   </div>

</section>

<section class="authors">

   <h1 class="title">Collaborations</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Aahan Bhat(Sales)</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Arunita nagar(Raw Material)</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rita(Food Specialists)</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>