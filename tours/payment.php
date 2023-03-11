<?php
session_start();

$mysqli = require __DIR__ . "/database.php";
    
$sql = "SELECT * FROM tours
        WHERE id = {$_SESSION["id"]}";
            
$result = $mysqli->query($sql);
    
$tour = $result->fetch_assoc();
$price=$tour["price2"];
$priceg = ($price*18)/100;

$lprice= $priceg+$price;

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

// print_r($_SESSION);
?>

<html>
    <head>
    <link type="text/css" rel="stylesheet" href="pay.css" />
    	
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
    </head>
    
<div class="container">
<?php if (isset($user)): ?>
        
        <p class="np">Hello <?= htmlspecialchars($user["name"]) ?></p>

        <!-- <p class="nav-link" ><a href="register/logout.php">Log out</a></p> -->

        <?php else: ?>
         <p class="nav-link">Please Login to get best Experience</p>
         <a href="register/login.php" class="btn btn-login">Login</a>
       <a href="register/register.php" class="btn btn-register">Register</a>
         <?php endif; 
       ?>
  <header class="header">
    <h1>Checkout</h1>
  </header>

  <form action="" class="form" method="POST">
    <div>
      <h2>Details-</h2>

      <div class="card">
        <address>
        <?= htmlspecialchars($tour["name"]) ?><br />
        <?= htmlspecialchars($tour["duration"]) ?><br />
        <?= htmlspecialchars($tour["route"]) ?>
        </address>
      </div>
    </div>

    <fieldset>
      <legend>Payment Method</legend>

      <div class="form__radios">
        <div class="form__radio">
          <img src="https://img.icons8.com/plasticine/100/000000/bank-card-back-side.png"/>
          <lable>Debit Card</label>
          <input checked id="visa" name="payment-method" type="radio" />
          <input type="text" class="card-number" placeholder="Card Number">
 
    <!-- Date Field -->
         <div class="date-field">
          <div class="month">
            <select name="Month">
           <option value="january">January</option>
           <option value="february">February</option>
           <option value="march">March</option>
           <option value="april">April</option>
           <option value="may">May</option>
           <option value="june">June</option>
           <option value="july">July</option>
           <option value="august">August</option>
           <option value="september">September</option>
           <option value="october">October</option>
           <option value="november">November</option>
           <option value="december">December</option>
            </select>
          </div>
          <div class="year">
           <select name="Year">
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2023">2025</option>
              <option value="2024">2026</option>
              <option value="2024">2027</option>
              <option value="2024">2028</option>
           </select>
          </div>
         </div>
 
    <!-- Card Verification Field -->
          <div class="card-verification">
      <div class="cvv-input">
        <input type="text" placeholder="CVV">
      </div>
      <div class="cvv-details">
        <p>3 or 4 digits usually found <br> on the back of card.</p>
      </div>
          </div>
        </div>

        <div class="form__radio">
        <img src="https://img.icons8.com/color/48/000000/google-pay-india.png"/>
          <label >Gpay</label>
          
          <input id="gpay" name="payment-method" type="radio" />
          <div class="qr">
            <img src="qr.png"  width="50" height="50">
            <label >Scan code to Pay.</label>
          </div>
        </div>

       
    </fieldset>

    <div>
      <h2>Bill</h2>

      <table>
        <tbody>
          <tr>
            <td>Price</td>
            <td align="right">₹<?= htmlspecialchars($tour["price2"]) ?></td>
          </tr>
          <tr>
            <td>GST 18%</td>

            <td align="right">₹<?= htmlspecialchars($priceg) ?></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td>Total</td>
            <td align="right">₹<?= htmlspecialchars($lprice) ?> </td>
          </tr>
        </tfoot>
      </table>
    </div>

    <div>
      <!-- <button class="button button--full" type="submit" >Buy Now</button> -->
      <a class="button button--full" href="buy.php" >Book Now.</a>
    </div>
  </form>
</div>



</html>