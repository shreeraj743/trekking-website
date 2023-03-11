<?php

session_start();
if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/register/database.php";
    
    $sql = "SELECT * FROM user_info
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    $type="";
}

// print_r($_SESSION);
?>

<html lang="en">
<head>
<link rel="stylesheet" href="home.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour and Travel</title>

    
</head>

<body>

<!--Header-->
<header>

    <div class="container">
        <nav>
            <div class="nav-logo">
                
            </div>
            <div class="nav-right">
                <div class="nav-close-icon"></div>
                <ul class="nav-menu">
                    <li class="nav-item ">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                   
                    <?php if (isset($user)): ?>
                        <li class="nav-item">
                         <a href="profile.php" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                        <a href="tours/tours.php" class="nav-link">Destinations</a>
                        </li>
                        <?php else: ?>
                            
                            <?php endif; 
                            ?>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
                <div class="nav-form">
                    <?php if (isset($user)): ?>
        
                     <p class="nav-link">Hello <?= htmlspecialchars($user["name"]) ?></p>
                     <div class="fa fa-user"  style="size:3rem "></div>
                     <div  id="login-btn"></div>
        
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

<!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-form">
                <h1 class="hero-title">Explore and Travel</h1>
                <h4 class="hero-subtitle">Plan Your Treak</h4>
                <form >
                    <div class="form-groups">
                        <div class="form-control">
                            <div class="custom-select-wrapper">
                               
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="custom-select-wrapper">
                                <div class="custom-select">
                                    <div class="custom-select__trigger"><span>Activity</span>
                                        <div class="arrow"></div>
                                    </div>
                                    <div class="custom-options">
                                        <span class="custom-option selected" data-value="">Activity</span>
                                        <span class="custom-option" data-value="Tour" >Tour</span>
                                        
                                        <span class="custom-option" data-value="Trek">trekking</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      
                    </div>
                    
                    <a class="btn btn-explore" href="redirect.php?type=1" >View package.</a>
                </form>
            </div>
            <div class="hero-img">
                <img src="https://raw.githubusercontent.com/mustafadalga/tour-and-travel/master/assets/img/hero.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!--End Hero -->


<!--Explore World-->
<section class="explore">
    <div class="container">
        <div class="section-content">
            <div class="section-img">
                <img src="https://raw.githubusercontent.com/mustafadalga/tour-and-travel/master/assets/img/explore.jpg" alt="">
            </div>
            <div class="section-text">
                <h3 class="section-title">A new way to explore the world </h3>
                <p class="p-description">
                <a href="#" class="btn btn-explore">Learn more</a>
            </div>
        </div>
    </div>
</section>
<!--Explore World-->

<!-- Features Destinations -->
<section class="features">
    <div class="container">
        <div class="features-content">
            <div class="section-header">
                <h3 class="section-head-title">Popular Trekking Places</h3>
                <a href="tours/tours.php" class="view-all">View all <span>></span></a>
            </div>
            <div class="features-cards">
                <div class="feature-card">
                    <img src="https://www.trawell.in/admin/images/upload/080966595Lonavala_Lohagad_Fort_Main.jpg" alt="" class="feature-img">
                    <div class="feature-card-desc">
                        <span class="location">1. Lohagad Fort (Near Lonavala)</span>
                        <span class="country">India</span>
                    </div>
                </div>
                <div class="feature-card">
                    <img src="https://www.trawell.in/admin/images/thumbs/100451207Bhandardara_Kalsubai_Peak_Main_thumb.jpg" alt="" class="feature-img">
                    <div class="feature-card-desc">
                        <span class="location">2. Kalsubai Peak  (Near Bhandardara)</span>
                        <span class="country">India</span>
                    </div>
                </div>
                <div class="feature-card">
                    <img src="https://www.trawell.in/admin/images/thumbs/336491791Pune_Sinhagad_Fort_Main_thumb.jpg" alt="" class="feature-img">
                    <div class="feature-card-desc">
                        <span class="location">3. Sinhagad Fort (Near Pune)</span>
                        <span class="country">India</span>
                    </div>
                </div>
                
                <div class="feature-card">
                    <img src="https://www.trawell.in/admin/images/thumbs/162482737Mahabaleshwar_Pratapgarh_Fort_Main_thumb.jpg" alt="" class="feature-img">
                    <div class="feature-card-desc">
                        <span class="location">4. Ratangad Fort (Near Bhandardara)</span>
                        <span class="country">India</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Destinations -->


<!--Guides-->
<section class="guides">
    <div class="container">
        <div class="section-content">
            <div class="section-text">
                <h3 class="section-title">
                    </h3>
                <p class="p-description"> 
               
            </div>
            <div class="section-img">
                <img src="https://raw.githubusercontent.com/mustafadalga/tour-and-travel/master/assets/img/guides.jpg" alt="">
            </div>
        </div>
    </div>
</section>




<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-text">
                
                <p class="footer-desc">
                    Plan and book your perfect trek with
                    expert advice, travel tips destination
                    information from us
                </p>
                <p class="copyright">©2022 shreeraj chinmay. All rights reserved</p>
            </div>
            <div class="nav-footer">
                <div class="nav-footer-col">
                    <h4 class="nav-footer-title">Destinations</h4>
                    <ul class="nav-footer-links">
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">India</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-footer-col">
                    <h4 class="nav-footer-title">Shop</h4>
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
                            <a href="#" class="nav-footer-link">Family Trek</a>
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

<!-- <div class="arrow-up"><i><</i></div> -->
<!-- <a id="button"></a> -->
<button class="btn btn-sm btn-primary rounded-circle position-fixed bottom-0 end-0 translate-middle d-none" onclick="scrollToTop()" id="back-to-up">
<div class="arrow-up"><i><</i></div>
</button>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script type="text/javascript" src="home.js"></script>


<!-- <script src="home.js"></script> -->
</body>
</html>