

<?php


$username = $firstName = $lastName= $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["username"])) {
    $username ="";
  } else {
    $username = ($_GET["username"]);

  }


    if (empty($_GET["firstName"])) {
      $nameErr = "Name is required";
    } else {
      $firstName = ($_GET["firstName"]);

    }


      if (empty($_GET["lastName"])) {
        $nameErr = "Name is required";
      } else {
        $lastName = ($_GET["lastName"]);

      }



        if (empty($_GET["password"])) {
          $nameErr = "Name is required";
        } else {
          $password = ($_GET["password"]);

        }

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
				<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name ="username" class="form-control" placeholder="fluffyWubkins42" style="width:250px" value="<?php echo $username;?>">
					</div>
					<div class="form-group">
						<label for="firstName">First Name</label>
						<input type="text" name ="firstName" class="form-control" placeholder="Ted" style="width:250px" value="<?php echo $firstName;?>">
					</div>
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" name="lastName" class="form-control" placeholder="Mosby" style="width:250px" value="<?php echo $lastName;?>">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name ="password" class="form-control" placeholder="***********" style="width:250px" value="<?php echo $password;?>">
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


    ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </html>
