<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user_info
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            // die("Login success");
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: ../home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}
?>

<html>

<head>
  <link rel="stylesheet" href="login.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Log in</p>
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    <form class="form1"  method= "post">
      
      <input class="un " type="text" align="center" name = "email" placeholder="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

      <input class="pass" type="password" id="password" align="center" name= "password" placeholder="Password">

      <button class="submit" align="center">Sign in</button>

      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
            
                
    </div>
     
</body>

</html>