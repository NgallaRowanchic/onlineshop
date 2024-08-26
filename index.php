<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  
    
    <!-- custom css file link -->  
     <link rel="stylesheet" href="style.css">
      
</head>



<body>
<!-- header section starts -->    

<section class="header"> 
    <a href="index.php" class="logo">ONLINE SHOP</a>
    <nav class="navbar px-5">   
     <a href="index.php">Home</a>
     <a href="about.php">About</a>
     <a href="package.php">Package</a>
     <a href="book.php">Buy</a>    
     </nav>
  
    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- heading section ends-->


<!-- header sections starts -->
<section class="home">

  <div class="swiper home-slider">
      <div class="swiper-wrapper">
           <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat">
              <div class="content">
                <span>style, fashion, glow</span>
                <h3>Discover your style</h3>
                <a href="package.php" class="btn">see more </a>
              </div>
           </div>
           <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat">
              <div class="content">
                <span>style, fashion, glow</span>
                <h3>Discover your style</h3>
                <a href="package.php" class="btn">Discover your glow </a>
              </div>
           </div>

           <div class="swiper-slide " style="background: url(images/home-slide-3.jpg) no-repeat">
              <div class="content">
                <span>style, fashion, glow</span>
                <h3>Discover your style</h3>
                <a href="package.php" class="btn">Keep the swag that matches your energy </a>
              </div>
           </div>
    </div>

                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
          
  </div>

</section>

<!-- header sections ends -->





<!-- services starts-->
<section  class="services">
  <h1 class="heading-title">Our services</h1>

  <div class="box-container">

      <div class="box">
       <img src="images/icon-1.png" alt="">
      <h3>Style</h3>
      </div>

      <div class="box">
       <img src="images/icon-2.png" alt="">
      <h3>Looks</h3>
      </div>
      
      
      <div class="box">
       <img src="images/icon-3.png" alt="">
      <h3>Fashion</h3>
      </div>


      <div class="box">
       <img src="images/icon-4.png" alt="">
      <h3>Kids Wear</h3>
      </div>

      <div class="box">
       <img src="images/icon-5.png" alt="">
      <h3>accessories</h3>
      </div>
      
      </div>
</section>

<!-- services ends-->

<!--home about section starts -->


<!--home about section ends -->






<!--footer section starts -->
<section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>quick links</h3>
        <a .href="index.php"><i class="fas fa-angle-right"></i>Home</a>
        <a .href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a .href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a .href="book.php"> <i class="fas fa-angle-right"></i>Book</a>    
        </div>

         <div class="box">
           <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a> 
            <a href="#"><i class="fas fa-angle-right"></i>about us</a> 
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a> 
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a> 
         </div>
          
        
         <div class="box">
         <h3>contact info</h3>
         <a href="#"><i class="fas fa-phone"></i>+237 671341557</a>
         <a href="#"><i class="fas fa-phone"></i>+237 621210001</a>
         <a href="#"><i class="fas fa-envelope"></i>ngallarowan@gmail.com</a>
         <a href="#"><i class="fas fa-envelope"></i>rowan.ngalla@icesacademy.org</a> 
         <a href="#"><i class="fas fa-map"></i>Yaounde, Cameroon</a>
         </div>
         
         <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Ngalla Rowan-chic</a>
         <a href="#"> <i class="fab fa-linkedin"></i> Ngalla Rowan-chic</a>
     
         </div>
       
      </div> 
    <div class="credit"> created by <span> AIA LAB</span> | all rights reserved!</div>
    
</section>
<!--footer section ends --> 

         <!--home about section starts -->
<section class="home-about">
      <div class="image">
              <img src="images/about-img-jpg" alt="">      
      </div>

           <div class="content">
           <P>Online Shop provides you with the latest, trending and quality cloths and accessories at minimal cost for maximum satisfaction. For our customers satisfaction is everything.
           </P> 
             <a href="about.php" class="btn">read more</a>
           </div>

</section>           
        <!--home about section ends -->



<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"> </script>

<!-- custom js file link-->
<script src="js/script.js"> </script>
</body>
</html>