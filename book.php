<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

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
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Header Section Ends -->

<div class="heading" style="background:url(image/bookbg.jpg) no-repeat">
    <h1>Book Now</h1>
</div>


<!-- booking section starts -->

<section class="booking"> 
    <h1 class="heading-title">book your trip!</h1>
    
    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guest" name="guest">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>
        
        
        <input type="submit" value="submit" class="btn" name="send">

    </form>
</section>

<!-- booking section ends -->




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





