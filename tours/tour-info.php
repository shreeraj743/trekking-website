<?php
session_start();

// $mysqli = require __DIR__ . "/database.php";
    
// $sql = "SELECT * FROM tours
//         WHERE id = {$_SESSION["id"]}";
            
// $result = $mysqli->query($sql);
    
// $tour = $result->fetch_assoc();


// print_r($_SESSION);
?>
<?php


if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user_info
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

print_r($_SESSION);
?>
<html lang="en">
<head>
         <link rel="stylesheet" href="tour-info.css">
         <script src="slide.js"></script>
         <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

           <script src="https://example.com/fontawesome/v5.15.4/js/all.js" ></script>
           
             <meta charset="UTF-8">
             <meta name="viewport"
          content="width=device-width, tour-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
             <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Tour and Travel</title>
    <!-- <link rel="icon" type="image/png" href="https://raw.githubtourcontent.com/mustafadalga/tour-and-travel/master/assets/img/logo.svg"> -->
    
</head>

<body>

<!--Header-->
<header>

    <div class="container">
        <nav>
            <div class="nav-logo">
                <!-- <img src="https://raw.githubtourcontent.com/mustafadalga/tour-and-travel/master/assets/img/logo.svg" alt=""> -->
            </div>
            <div class="nav-right">
                <div class="nav-close-icon"></div>
                
                <ul class="nav-menu">
                    <li class="nav-item ">
                        <a href="../home.php" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="tours.php" class="nav-link">Destinations</a>
                    </li>
                </ul>
                <div class="nav-form">
                <?php if (isset($user)): ?>
        
                  <p class="nav-link">Hello <?= htmlspecialchars($user["name"]) ?></p>

                  <p class="nav-link" ><a href="register/logout.php">Log out</a></p>

                  <?php else: ?>
                   <p class="nav-link">Please Login to get best Experience</p>
                   <a href="register/login.php" class="btn btn-login">Login</a>
                   <a href="register/register.php" class="btn btn-register">Register</a>
                   <?php endif; 
                ?>
                </div>
            </div>
            <div class="hamburger-menu-wrap">
                <div class="hamburger-menu">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--End Header-->
    

    <div class="slideshow-container">
      
      <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = {$_SESSION["id"]}";
                            
                       $result = $mysqli->query($sql);
                    
                       $tour = $result->fetch_assoc();
                        ?>
        <img src="<?= htmlspecialchars($tour["url1"]) ?>" style="width:100%">
       
        <div class="Name"><?= htmlspecialchars($tour["name"]) ?></div>
        
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = {$_SESSION["id"]}";
                            
                       $result = $mysqli->query($sql);
                    
                       $tour = $result->fetch_assoc();
                        ?>
        <img src="<?= htmlspecialchars($tour["url2"]) ?>" style="width:100%">
        <div class="Name"><?= htmlspecialchars($tour["name"]) ?></div>
        
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="<?= htmlspecialchars($tour["url3"]) ?>" style="width:100%">
        <div class="Name"><?= htmlspecialchars($tour["name"]) ?></div>
        
      </div>
      <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="<?= htmlspecialchars($tour["url4"]) ?>" style="width:100%">
        <div class="Name"><?= htmlspecialchars($tour["name"]) ?></div>
        
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if(n > slides.length) {
          slideIndex = 1
        }
        if(n < 1) {
          slideIndex = slides.length
        }
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for(i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>






<!--Explore World-->
     <section class="explore">
    <div class="container">
        <div class="section-content">
            
            <div class="section-text">
             
                <h3 class="section-title">"<?= htmlspecialchars($tour["title"])?>"</h3>
                <p class="p-description"><?= htmlspecialchars($tour["info2"]) ?></p>
                
            </div>

            <div class="section-img">
             <h3 class="section-title"><?= htmlspecialchars($tour["name"]) ?>-</h3>
             <h3 class="section-title">Duration-</h3>
             <p class="p-description"><?= htmlspecialchars($tour["duration"]) ?></p>
             <h3 class="section-title">Route-</h3>
             <p class="p-description"><?= htmlspecialchars($tour["route"]) ?></p>
             <h3 class="section-title">Trip Highlights-</h3>
             <p class="p-description"><?= htmlspecialchars($tour["highlight1"]) ?><b><?= htmlspecialchars($tour["highlight2"]) ?></p>
             <h3 class="section-title">Package-</h3>
             <p class="p-description"><?= htmlspecialchars($tour["package"]) ?></p>
             <h3 class="section-title">Price=</h3>
             <p class="p-description"><?= htmlspecialchars($tour["price"]) ?></p>
             <a href="book.php" class="btn btn-explore">Checkout</a>
                
            </div>

        </div>
    </div>
     </section>
<!--Explore World-->










<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-text">
                <!-- <img src="https://raw.githubtourcontent.com/mustafadalga/tour-and-travel/master/assets/img/logo.svg" alt="" class="footer-icon"> -->
                <p class="footer-desc">
                    Plan and book your perfect trip with
                    expert advice, travel tips destination
                    information from us
                </p>
                <p class="copyright">©2022 Rahul Talekar. All rights reserved</p>
            </div>
            <div class="nav-footer">
                <div class="nav-footer-col">
                    <h4 class="nav-footer-title">Destinations</h4>
                    <ul class="nav-footer-links">
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">India</a>
                        </li>
                        <!-- <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Antarctica</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Asia</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Europe</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">America</a>
                        </li> -->
                    </ul>
                </div>
                <div class="nav-footer-col">
                    <h4 class="nav-footer-title">Shop</h4>
                    <!-- <ul class="nav-footer-links">
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Destination Guides</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Pictorial & Gifts</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Special Offers</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Delivery Times</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">FAQs</a>
                        </li>
                    </ul> -->
                </div>
                <div class="nav-footer-col">
                    <h4 class="nav-footer-title">Interests</h4>
                    <ul class="nav-footer-links">
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Adventure Travel</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Art And Culture</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Wildlife And Nature</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Family Holidays</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Food And Drink</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="social-media">
                <a href="#" class="social-link">
                    <img src="assets/img/social-media/twitter.svg" class="icon" alt="">
                </a>
                <a href="#" class="social-link">
                    <img src="assets/img/social-media/facebook.svg" alt="">
                </a>
                <a href="#" class="social-link">
                    <img src="assets/img/social-media/instagram.svg" alt="">
                </a>
                <a href="#" class="social-link">
                    <img src="assets/img/social-media/linkedin.svg" alt="">
                </a>
                <a href="#" class="social-link">
                    <img src="assets/img/social-media/youtube.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
<!--Footer-->

<div class="arrow-up"><i><</i></div>


<script type="text/javascript" src="menu.js"></script>
</body>
</html>