<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/form.css">


</head>




<body>
<div class="form ">
<h2> Sign Up </h2>

<form action="includes/signup.inc.php" method="post">
<input class="input" type="text" name="name" placeholder="Full Name...">
</br>
<input class="input" type="text" name="email" placeholder="E-mail...">
</br>
<input  class="input"type="text" name="uid" placeholder="Username...">
</br>
<input  class="input"type="password" name="pwd" placeholder="Password...">
</br>
<input  class="input"type="password" name="pwdrepeat" placeholder="Repeat Password...">
</br>
<button  class="input submit" type="submit" name="submit">SIGN UP</button>
</form>
<a href="login.php">Already registered? Login!</a>
</div>

<?php
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p>FILL IN ALL FIELDS!</p>";
		}
		else if($_GET["error"] == "invaliduid"){
			echo "<p>Choose a proper username!</p>";
		}
		else if($_GET["error"] == "invalidemail"){
			echo "<p>Choose a proper email!</p>";
		}
		else if($_GET["error"] == "passwordsdontmatch"){
			echo "<p>Passwords dont match!</p>";
		}
		else if($_GET["error"] == "stmtfailed"){
			echo "<p>Something went wrong</p>";
		}
		else if($_GET["error"] == "usernametaken"){
			echo "<p>Choose another username</p>";
		}
		else if($_GET["error"] == "none"){
			echo "<p>You have signed up!</p>";
		}
	}


?>



</body>













</html>