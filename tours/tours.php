<?php

$mysqli = require __DIR__ . "/database.php";
    
$sql = "SELECT * FROM tours
        WHERE id = 1";
            
$result = $mysqli->query($sql);
    
$tour = $result->fetch_assoc();


// print_r($_SESSION);
?>
<?php

session_start();
if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user_info
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

print_r($_SESSION);
?>




<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="tours.css">
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, tour-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Tours</title>
            <!-- <script>
       function click() {
        //  window.location ="/redirect.php?id=2";
        console.log("clicked")
         window.location.href = "redirect.php";  
         
       }
     </script> -->
     
     <script src="menu.js"></script>
            <!-- <link rel="icon" type="image/png" href="https://raw.githubtourcontent.com/mustafadalga/tour-and-travel/master/assets/img/logo.svg"> -->
    </head>
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
                                <a href="../home.php" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Destinations</a>
                            </li>
                            <?php if (isset($user)): ?>
                        <li class="nav-item">
                         <a href="profile.php" class="nav-link">Profile</a>
                        </li>
                        <?php else: ?>
                            
                            <?php endif; 
                            ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">source</a>
                            </li>
                        </ul>
                        <div class="nav-form">
                        <?php if (isset($user)): ?>
        
                         <p class="nav-link">Hello <?= htmlspecialchars($user["name"]) ?></p>

                         <p class="nav-link" ><a href="register/logout.php">Log out</a></p>

                         <?php else: ?>
                          <p class="nav-link">Please Login to get best Experience</p>
                          <a href="../register/login.php" class="btn btn-login">Login</a>
                          <a href="../register/register.php" class="btn btn-register">Register</a>
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


    


    <section class="features">
        <div class="container">
         <div class="section-header">
                    <h3 class="section-head-title">Choose from wide varieties of destinations</h3>
                    <!-- <a href="#" class="view-all">View all <span>></span></a> -->
         </div>
            <div class="features-content">
             
                <div class="features-cards">
                   
                    <div class="feature-card">
                        <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 1";
                            
                       $result = $mysqli->query($sql);
                    
                       $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc" >
                           
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span> 
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewh" href="redirect.php?id=1" >View package.</a>
                            
                            <!-- <p class="nav-link" ><a href="redirect.php?id=1">Log out</a></p> -->
                        </div>
                        
                      
                    </div>
                    <div class="feature-card">
                    <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 2";
                            
                        $result = $mysqli->query($sql);
                    
                        $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewh" href="redirect.php?id=2" >View package.</a>
                            
                        </div>
                    </div>
                    <div class="feature-card">
                         <?php 
                            $sql = "SELECT * FROM tours
                            WHERE id = 3";
                                
                            $result = $mysqli->query($sql);
                        
                            $tour = $result->fetch_assoc();
                          ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewh" href="redirect.php?id=3" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                    <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 4";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewh" href="redirect.php?id=4" >View package.</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Beaches -->
            <div class="features-content">
             
                <div class="features-cards">
                   
                    <div class="feature-card">
                        <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 5";
                            
                       $result = $mysqli->query($sql);
                    
                       $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                           
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span> 
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewb" href="redirect.php?id=5" >View package.</a>
                            
                            
                        </div>
                    </div>
                    <div class="feature-card">
                    <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 6";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewb" href="redirect.php?id=6" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                    <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 7";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewb" href="redirect.php?id=7" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                    <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 8";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewb" href="redirect.php?id=8" >View package.</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Cultural -->
            <div class="features-content">
             
                <div class="features-cards">
                   
                    <div class="feature-card">
                        <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 9";
                            
                       $result = $mysqli->query($sql);
                    
                       $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                           
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span> 
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=9" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                    <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 10";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=10" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                    <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 11";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=11" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                     <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 12";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=12" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                     <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 13";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=13" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                     <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 14";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=14" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                     <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 15";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=15" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                     <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 16";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=16" >View package.</a>
                        </div>
                    </div>
                    
                    <div class="feature-card">
                     <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 17";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=17" >View package.</a>
                        </div>
                    </div>
                    <div class="feature-card">
                     <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = 18";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                        <img src="<?= htmlspecialchars($tour["url1"]) ?>" alt="" class="feature-img">
                        <div class="feature-card-desc">
                            <span class="location"><?= htmlspecialchars($tour["name"]) ?></span>
                            <span class="country"><?= htmlspecialchars($tour["info"]) ?></span>
                            <a class="viewc" href="redirect.php?id=18" >View package.</a>
                        </div>
                    </div>
                

                
                
            </div>
        </div>
        
        
        
    </section>


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
                <!-- <a href="#" class="social-link">
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
                </a> -->
            </div>
        </div>
     </div>
    </footer>
<!--Footer-->

<div class="arrow-up"><i><</i></div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script type="text/javascript" src="tours.js"></script>
<script type="text/javascript" src="menu.js"></script>
    


</html>