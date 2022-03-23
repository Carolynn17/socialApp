<?php
//  include './actions/operations.php';

// date_default_timezone_set('Africa/Kampala');
// $time = date('l jS \of F Y h:i:s A');
// if ($time < '12:00:00') {
//     echo 'Welcome back' . ' Good morning' . '<br>';
// } elseif ($time > '16:00:00') {
//     echo 'Welcome back' . '     ' . 'Good evening' . '<br>';
// } else {
//     echo 'Welcome back' . 'good Afternoon' . '<br>';
// }

// echo 'Date and time today is: ' . $time;
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validated Login Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="container">
 	<h1 class="label">
 		Login
 	</h1>
 	<form class="loginform" method="POST" action="homepage.php" onsubmit="return validated()">

 		<div class="font">Email </div>
 		<input autocomplete="off" type="text"  required name="email">
         <!-- pattern="^([aA-zZ_]{1,}[ ][aA-zZ_]{1,}|[aA-zZ_]{1,}[ ][aA-zZ_]{1,}[ ][aA-zZ_]{1,})+$" -->
 		<div id="email_error"> Please fill up your Email or Phone</div>

 		<div class="font2"> Password</div>
 		<input type="password" required name="password">
 		<div id="pass_error">Please fill up your Password</div>

 		<button type="submit" href="./homepage.php">Register</button>
 		<div class="mb-4">
			
			
		  <div ><a href="./forgot_password.html">Forgot Password?</a> </div>
		  <!-- <div > <a href="./homepage.php">Go back to Home Page</a>  </div> -->
 	</form> 

  </div>

</body>
</html>