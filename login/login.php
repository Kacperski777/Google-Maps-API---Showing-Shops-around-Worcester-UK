<!DOCTYPE html>
<html>
<head>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/form.css">


<body>

<div class="home">
<a class="home2" style="color: white; text-decoration: none;" href="index.php">HOME PAGE</a>


</div>



<div class="form col-6">
<h2> LOGIN </h2>
<form action="includes/login.inc.php" method="post">
<input class="input" type="text" name="uid" placeholder="Username/E-mail...">
</br>
<input class="input" type="password" name="pwd" placeholder="Password...">
</br>
<button class="input submit" type="submit" name="submit">LOGIN</button>
</br>
<a  href="signup.php">Create an account</a>
</div>

<?php
echo "<link rel='stylesheet' type='text/css' href='css/form.css'>";
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p>Fill in all the fields</p>";
		}
		else if($_GET["error"] == "wronglogin"){
			echo "<p>Incorrect login information</p>";
		}
	}

?>


</body>













</html>