<!DOCTYPE html>
<html>
<head>
</head>




<body>

<h2> Sign Up </h2>
<form action="includes/signup.inc.php" method="post">
<input type="text" name="name" placeholder="Full Name...">
<input type="text" name="email" placeholder="E-mail...">
<input type="text" name="uid" placeholder="Username...">
<input type="password" name="pwd" placeholder="Password...">
<input type="password" name="pwdrepeat" placeholder="Repeat Password...">
<button type="submit" name="submit">Sign Up</button>

</form>

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