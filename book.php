<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>


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
<!-- header section ends-->
<div class="heading" style="background: url(PICS/h2.jpg) no-repeat">
  <h1>Buy More</h1>  
</div> 

<!---booking section starts -->
<section class="buy">
<h1 class="heading-title"> buy from ONLINE SHOP!!</h1>

<form action="book_from.php" method="post" class="book-form">

<div class="flex">

  <div class="inputBox">
  <span>name :</span>
  <input type="text" placeholder="  enter your name  " name="name">
</div>


<div class="inputBox">
  <span>email :</span>
  <input type="email" placeholder="  enter your email  " name ="email">
</div>


<div class="inputBox">
  <span>number :</span>
  <input type="number" placeholder="  enter your number  " name ="phone">
</div>


<div class="inputBox">
  <span>address :</span>
  <input type="text" placeholder="enter your address where product is sent  " name ="address">
</div>


<div class="inputBox">
  <span>which_products :</span>
  <input type="text" placeholder="  place your orders   " name ="products">
</div>


<div class="inputBox">
  <span>how_many :</span>
  <input type="number" placeholder="  how many  " name ="number">
</div>


<div class="inputBox">
  <span>sizes :</span>
  <input type="text" placeholder="what sizes; S, M, L, XL, XXL, XXXL, XXXXL " name ="sizes">
</div>

</div>

<input type="submit" value="submit" class="btn" name="send">

</form>

</section>

<!---booking section ends -->



















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

       



<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"> </script>

<!-- custom js file link-->
<script src="js/script.js"> </script>

</body>
</html>