<?php
 session_start();
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>




<body>





<nav>
<div>

<?php

echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

if (isset($_SESSION["useruid"])){
	echo "<p> Hello there " . $_SESSION["useruid"] ."</p>";
	
	echo "<a href='profile.php'>Profile page</a>";
	echo "<a href='includes/logout.inc.php'>Log out</a>";
	
	
}
else{
	echo '<div class="col">';
	echo  "<a  class='button col-1' href='signup.php'>SIGN UP</a> ";

	echo "<a  class='button col-1' href='login.php'> LOGIN</a> </div>";
	
	
}



?>

</div>
</nav>


</body>













</html>