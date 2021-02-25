<!DOCTYPE html>
<html>
<head>
</head>




<body>

<h2> Login </h2>
<form action="includes/login.inc.php" method="post">
<input type="text" name="uid" placeholder="Username/E-mail...">
<input type="password" name="pwd" placeholder="Password...">
<button type="submit" name="submit">Login</button>


<?php
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p>FILL IN ALL FIELDS!</p>";
		}
		else if($_GET["error"] == "wronglogin"){
			echo "<p>Incorrect login information!</p>";
		}
	}

?>


</body>













</html>