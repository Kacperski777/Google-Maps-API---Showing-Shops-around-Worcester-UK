<!DOCTYPE html>
<html>
<head>
	<title>ShopMap | Login </title>
	<link rel="shortcut icon" type="image/jpg" href="img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/form.css">
</head>



<body>

<div class="home col">
<a class="home2 col-1" style="color: white; text-decoration: none;" href="index.php">HOME PAGE</a>


</div>

<section>
<div class="container">
<div class="form row login-form">
<div class="col-lg-6">
<img class="worcester2" src="img/worcester2.jpg">

</div>
<div class="col-lg-6 form2">
<h2 class="signup-title"> LOGIN </h2>
<form class="" action="includes/login.inc.php" method="post">
<input class="input" type="text" name="uid" placeholder="Username/E-mail...">
</br>
<input class="input" type="password" name="pwd" placeholder="Password...">
</br>
<button class="input submit" type="submit" name="submit">LOGIN</button>
</br>
<a  href="signup.php">Create an account</a>
</div>
</div>
</div>
</section>




<?php
echo "<link rel='stylesheet' type='text/css' href='css/form.css'>";
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p class='error'>Fill in all the fields</p>";
		}
		else if($_GET["error"] == "wronglogin"){
			echo "<p class='error'>Incorrect login information</p>";
		}
	}

?>


</body>













</html>
