<!DOCTYPE html>
<html>
<head>
	<title>ShopMap | Sing Up </title>
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
	<div class="form row">
	<div class="col-lg-6 image-worcester ">
		<img class="worcester" src="img/worcester1.jpg">
	</div>
<div class="col-lg-6 col-sm-12 form2 ">
<h2 class="signup-title"> SIGN UP </h2>
<form class="" action="includes/signup.inc.php" method="post">
<input  class="input" type="text" name="name" placeholder="Full Name...">
<input class="input " type="text" name="email" placeholder="E-mail...">

<input  class="input "type="text" name="uid" placeholder="Username...">

<input  class="input "type="password" name="pwd" placeholder="Password...">

<input  class="input "type="password" name="pwdrepeat" placeholder="Repeat Password...">
<br />
<button  class="input submit" type="submit" name="submit">SIGN UP</button>
</form>
<a class="link" href="login.php">Already registered? Login!</a>
	</div>
</div>
</div>
</section>
<?php
echo "<link rel='stylesheet' type='text/css' href='css/form.css'>";

	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p class= 'error'>Fill in all the fields</p>";
		}
		else if($_GET["error"] == "invaliduid"){
			echo "<p class= 'error'>Choose a proper username</p>";
		}
		else if($_GET["error"] == "invalidemail"){
			echo "<p class= 'error'>Choose a proper email</p>";
		}
		else if($_GET["error"] == "passwordsdontmatch"){
			echo "<p class= 'error'>Passwords do not match</p>";
		}
		else if($_GET["error"] == "stmtfailed"){
			echo "<p class= 'error'>Something went wrong</p>";
		}
		else if($_GET["error"] == "usernametaken"){
			echo "<p class= 'error'>Choose another username</p>";
		}
		else if($_GET["error"] == "none"){
			echo "<p class='success'>You have signed up!</p>";
		}
		else if($_GET["error"] == "invalidPasswordLength"){
			echo "<p class='error'>Password Wrong Length</p>";
		}

	}


?>



</body>













</html>
