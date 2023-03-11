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
<link rel="stylesheet" href="contact.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour and Travel</title>

    
</head>

<body>
<a href="home.php" class="back">Back</a>
<div class="formbold-main-wrapper">


  <div class="formbold-form-wrapper">
    <form action="submit.php" method="POST">
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label"> Full Name </label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Full Name"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label"> Email Address </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-mb-5">
        <label for="subject" class="formbold-form-label"> Subject </label>
        <input
          type="text"
          name="subject"
          id="subject"
          placeholder="Enter your subject"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-mb-5">
        <label for="message" class="formbold-form-label"> Message </label>
        <textarea
          rows="6"
          name="message"
          id="message"
          placeholder="Type your message"
          class="formbold-form-input"
        ></textarea>
      </div>

      <div>
        <button class="formbold-btn">Submit</button>
      </div>
    </form>
  </div>
</div>
<style>

   




</body>
</html>