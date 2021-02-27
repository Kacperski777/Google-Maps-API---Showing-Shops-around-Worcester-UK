<!DOCTYPE html>
<html>
<head>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/form.css">


<body>
<div class="form">
<h2> Login </h2>
<form action="includes/login.inc.php" method="post">
<input class="input" type="text" name="uid" placeholder="Username/E-mail...">
</br>
<input class="input" type="password" name="pwd" placeholder="Password...">
</br>
<button class="input" type="submit" name="submit">Login</button>
</div>

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