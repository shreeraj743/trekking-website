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

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Booking  </title>

	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    
    <script>
        function redirect() {
         let url = "payment.php";
        window.location(url);
        }
        </script>



	<link type="text/css" rel="stylesheet" href="book.css" />

	

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
				<!-- <img src="t.jpg"  class="img"> -->
					
					<div class="booking-form">
						
						
						<form action="booked.php" method="post">
							<div class="form-header">
								<h2>Make your reservation</h2>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date"  name ="date"required>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adults</span>
										<select class="form-control" name="adults">
										<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Children</span>
										<select class="form-control" name="childerns">
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" type="email" name="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" name="phone" placeholder="Enter your phone number">
							</div>
							<div class="form-btn">
								<!-- <button class="submit-btn" onClick="redirect()">Book Now</button> -->
                                <!-- <a  class="submit-btn"">Book Now</a> -->
								<button  class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>