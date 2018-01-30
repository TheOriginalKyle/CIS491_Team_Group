<html>
	<head>
		<title>Team Group Website</title>
				<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">

			  <!-- Bootstrap 4 CSS -->
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<?php
		$cleanMyInput = False;
		?>
		<div class="jumbotron">
			<h2 style="text-align:center">Team Group Was Here</h2>
			<div class="container">
				<form id="myForm">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" id="username" class="form-control" placeholder="fluffyWubkins42" style="width:250px">
					</div>
					<div class="form-group">
						<label for="firstName">First Name</label>
						<input type="text" id="firstName" class="form-control" placeholder="Ted" style="width:250px">
					</div>
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" id="lastName" class="form-control" placeholder="Mosby" style="width:250px">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" class="form-control" placeholder="***********" style="width:250px">
					</div>
					<div class="form-check">
						<input class="checkbox" type="checkbox" id="sanatizeCheck">
  					<label class="form-check-label" for="sanatizeCheck">Sanatize Inputs</label>
					</div>
					<div class="form-check">
						<input class="checkbox" type="checkbox" id="postCheck" onclick="makePost()">
  					<label class="form-check-label" for="postCheck">Resist CSRF</label>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" id="submitBtn" value="">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<script>
		<!-- This function first checks if its already a post request then changes it to either a post or get based on that information. -->
			function makePost(){
				if(document.getElementById('myForm').hasAttribute('method', 'post') == false)
				{
					document.getElementById('myForm').setAttribute('method', 'post');
					console.log('Is post!');
				}else {
					document.getElementById('myForm').setAttribute('method', 'get');
					console.log('Is get!');
				}
			}
		</script>
		<?php
		//This checks if its a post request then begins messing with the data
			if ($_SERVER["REQUEST_METHOD"] == "POST" && $cleanMyInput == true)
			{
				echo "Is POST Request!";
				echo "Sanatizing Input...";
			}elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $cleanMyInput == false){
				echo "Is POST Request!";
				echo "WARNING Input is not sanatized!";
			}elseif($cleanMyInput == true && $_SERVER["REQUEST_METHOD"] != "POST"){
				echo "Is GET Request!";
				echo "Sanatizing Input...";
			}

		 ?>
	</body>
	<?php
		function clean_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	 ?>

	<!-- Dependencies at bottom for faster load time -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</html>
