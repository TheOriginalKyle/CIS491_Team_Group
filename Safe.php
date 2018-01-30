











<?php
// define variables and set to empty values
session_start();
require_once 'csrf_request_type_functions.php';
require_once 'csrf_token_functions.php';
$usernameErr = $firtnameErr = $lastnameErr = $passwordnameErr ="";
$username = $firstName = $lastName= $password = $message=  "";

if(request_is_post()) {




  if (empty($_POST["username"])) {
    $usernameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["firstName"])) {
    $firtnameErr = "First Name is required";
  } else {
    $firstName= test_input($_POST["firstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $firtnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lastName"])) {
        $lastnameErr = "Last Name is required";
  } else {
    $lastName = test_input($_POST["lastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["password"])) {
      $passwordnameErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }


  }


 if(csrf_token_is_valid()) {
	 $message = "CSRF TOKEN Okay";


	}else {
		$message = "CSRF TOKEN MISSING OR MISMATCHED";







}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);


  return $data;


}
?>

<html>
	<head>
		<title>Team Group Website</title>
				<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">

			  <!-- Bootstrap 4 CSS -->
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>

		<div class="jumbotron">
			<h2 style="text-align:center">Team Group Was Here</h2>
			<div class="container">
        <p><span class="error">* required field.</span></p>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php echo csrf_token_tag(); ?>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name ="username" class="form-control" placeholder="fluffyWubkins42" style="width:250px" value="<?php echo $username;?>">
            <span class="error">* <?php echo $usernameErr;?></span>
					</div>
					<div class="form-group">
						<label for="firstName">First Name</label>
						<input type="text" name ="firstName" class="form-control" placeholder="Ted" style="width:250px" value="<?php echo $firstName;?>">
          <span class="error">* <?php echo $firtnameErr;?></span>
					</div>
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" name="lastName" class="form-control" placeholder="Mosby" style="width:250px" value="<?php echo $lastName;?>">
          <span class="error">* <?php echo $lastnameErr;?></span>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name ="password" class="form-control" placeholder="***********" style="width:250px" value="<?php echo $password;?>">
          <span class="error">* <?php echo $passwordnameErr;?></span>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" id="submitBtn" value="Submit">Submit</button>
					</div>
				</form>

			</div>
		</div>
    <?php


    echo "<br>";
    echo "<h2>Your Input:</h2>";
    echo $username;
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $message;


    ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </html>
