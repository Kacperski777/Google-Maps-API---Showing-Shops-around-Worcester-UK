<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/form.css">


</head>




<body>

<div class="home col">
<a class="home2 col-1" style="color: white; text-decoration: none;" href="index.php">HOME PAGE</a>


</div>



<div class="container">
<div class="form row">
<h2 class="col-12"> SIGN UP </h2>
<form class="col" action="includes/signup.inc.php" method="post">
<input  class="input " type="text" name="name" placeholder="Full Name...">
</br>
<input class="input  " type="text" name="email" placeholder="E-mail...">
</br>
<input  class="input "type="text" name="uid" placeholder="Username...">
</br>
<input  class="input "type="password" name="pwd" placeholder="Password...">
</br> 
<input  class="input "type="password" name="pwdrepeat" placeholder="Repeat Password...">
</br>
<button  class="input submit col-6" type="submit" name="submit">SIGN UP</button>
</form>
<a class="col-12" href="login.php">Already registered? Login!</a>
</div>
</div>

<?php
echo "<link rel='stylesheet' type='text/css' href='css/form.css'>";

	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p>Fill in all the fields</p>";
		}
		else if($_GET["error"] == "invaliduid"){
			echo "<p>Choose a proper username</p>";
		}
		else if($_GET["error"] == "invalidemail"){
			echo "<p>Choose a proper email</p>";
		}
		else if($_GET["error"] == "passwordsdontmatch"){
			echo "<p>Passwords do not match</p>";
		}
		else if($_GET["error"] == "stmtfailed"){
			echo "<p>Something went wrong</p>";
		}
		else if($_GET["error"] == "usernametaken"){
			echo "<p>Choose another username</p>";
		}
		else if($_GET["error"] == "none"){
			echo "<p class='success'>You have signed up!</p>";
		}
	}


?>



</body>













</html>