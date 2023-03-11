<?php

session_start();
if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/register/database.php";
    
    $sql = "SELECT * FROM user_info
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    // print_r($_SESSION);
    $tid = $_SESSION['id'];
    print_r($tid);
}


?>

<html>

<head>
  <link rel="stylesheet" href="profile.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">User Profile</p>

    <a class="text">Regiserd Username- &nbsp &nbsp<?= htmlspecialchars($user["name"]) ?></a>
    <br>
    <a class="text">Regiserd Email- &nbsp &nbsp <?= htmlspecialchars($user["email"]) ?></a>
    <br>
    
    
    <form class="form1"  action="updateu.php" method= "post">
    <a class="text">change Username=></a>
      
      <input class="un " type="text" align="center" name = "newname" placeholder="new username" id="name">
      

      <button class="submit" align="center">Change</button>

     
                
    </div>
    <div class="main">
    <?php 
                        $sql = "SELECT * FROM tours
                        WHERE id = $tid";
                            
                        $result = $mysqli->query($sql);
                    
                         $tour = $result->fetch_assoc();
                        ?>
                      
    <p class="sign" align="center">Bookings</p>

    <a class="text">TOUR Name- &nbsp &nbsp<?= htmlspecialchars($tour["name"]) ?></a>
    <br>
    <a class="text">Duration- &nbsp &nbsp <?= htmlspecialchars($tour["duration"]) ?></a>
    <br>
    <a class="text">route- &nbsp &nbsp <?= htmlspecialchars($tour["route"]) ?></a>
    <br>
  

    
    
    

     
                
    </div>
   
     
</body>

</html>