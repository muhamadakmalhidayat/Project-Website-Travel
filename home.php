<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle></tittle>

    <!-- Swiper link -->
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<!-- custom css link -->
    <link rel="stylesheet" href="CSS/style.css">    
</head>
<body>



<!-- Header Section Start -->

<section class="Header">

    <a href="home.php" class="logo" >Travel.</a>

    <nav class="navbar">
        <a href="login.php">Login</a>
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Header Section Ends -->

<!-- Home Section Start -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(image/aboutbg.png) no-repeat">
             <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Travel Around The World</h3>
                <a href="package.php" class="btn">Discover More</a>
             </div>
         </div>

        <div class="swiper-slide slide" style="background:url(image/servicebg.png) no-repeat">
            <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Discover The New Place</h3>
                <a href="package.php" class="btn">Discover More</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(image/bookbg.jpg) no-repeat">
            <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Make Your Worthwhile</h3>
                 <a href="package.php" class="btn">Discover More</a>
            </div>
        </div>

    </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
        
    </div>

</section>

<!-- Home Section Ends -->

<!-- Service Section Start -->
 <section class="service">

    <h1 class="heading-title"> Our Services </h1>
    <div class="box-container">

        <div class="box">
            <img src="image/adventure.png" alt="">
            <h3>Adventure</h3>
        </div>

        <div class="box">
            <img src="image/tourguide.png" alt="">
            <h3>Tour Guide</h3>
        </div>

        <div class="box">
            <img src="image/backpacking.png" alt="">
            <h3>Trekking`</h3>
        </div>

        <div class="box">
            <img src="image/fire.png" alt="">
            <h3>Camp fire</h3>
        </div>

        <div class="box">
            <img src="image/jeep.png" alt="">
            <h3>Off Road</h3>
        </div>

        <div class="box">
            <img src="image/camping.png" alt="">
            <h3>Camping</h3>
        </div>

    </div>

 </section>

<!-- Service Section Ends -->

<!-- Home About Section Home Start -->

<section class="home-about">

    <div class="image">
        <img src="image/aboutUs.png" alt="">
    </div>

    <div class="content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum cum magnam magni animi cumque natus aut deleniti tempore, officia voluptates esse illo. Hic aliquam incidunt labore laboriosam atque deleniti dignissimos.</p>
        <a href="about.php" class="btn">Read More</a>
    </div>
    
</section>

<!-- Home About section Home End -->

<!-- Home Package Section Start -->

<section class="home-packages">
    <h1 class="heading-title"> our packages </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/package-1.png" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="book.php" class="btn">book now</a>
            </div>   
         </div>  

         <div class="box">
            <div class="image">
                <img src="image/package-2.png" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Fell the experience.</p>
                <a href="book.php" class="btn">book now</a>
            </div>   
         </div> 
         
         <div class="box">
            <div class="image">
                <img src="image/package-3.png" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Fell the experience.</p>
                <a href="book.php" class="btn">book now</a>
            </div>   
         </div> 

    </div>  
    
    <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
   
</section>    

<!-- Home Package Section End -->

<!-- Home Offer Section Starts -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor, sit amet consecetur adipisicing elit. 
            In odio earum quae neque officia voluptatibus maxime consectetur excepturi soluta placeat! 
            Dolore molestiae eveniet recusandae dicta harum odit, necessitatibus a rem.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>


<!-- Home Offer Section End -->

<!-- Footer section Start -->

<section class="footer">
    <div class="box-container">

    <div class="box">
        <h3>Quick Links</h3>
    <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
    <a href="home.php"> <i class="fas fa-angle-right"></i> About</a>
    <a href="home.php"> <i class="fas fa-angle-right"></i> Package</a>
    <a href="home.php"> <i class="fas fa-angle-right"></i>Book</a>
    </div>

    <div class="box">
        <h3>Extra Links</h3>
    <a href="#"> <i class="fas fa-angle-right"></i> Ask Question</a>
    <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
    <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy</a>
    <a href="#"> <i class="fas fa-angle-right"></i> Terms Of Use</a>
    </div>

    <div class="box">
        <h3>Contact Info</h3>
    <a href="#"> <i class="fas fa-phone"></i> +62 08881113311</a>
    <a href="#"> <i class="fas fa-envelope"></i> unjjaya@gmail.com</a>
    <a href="#"> <i class="fas fa-map"></i> Jakarta, Indonesia</a>
    </div>


    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>

    </div>

    <div class="credit"> Created By <span> Kelompok 2 </span>| All Rights Reserved! </div>
    
</section>

<!-- Footer section Ends -->

<!-- swiper js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js -->
<script src="js/script.js"></script>

</body>
</html>
