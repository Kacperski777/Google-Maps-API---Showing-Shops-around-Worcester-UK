<?php
 session_start();
?>




<!DOCTYPE html>
<html>
<head>
</head>




<body>
<nav>
<div>


<?php
if (isset($_SESSION["useruid"])){
	echo "<p> Hello there " . $_SESSION["useruid"] ."</p>";
	
	echo "<a href='profile.php'>Profile page</a>";
	echo "<a href='includes/logout.inc.php'>Log out</a>";
	
	
}
else{
	echo "<a href='signup.php'>Sign up</a>";
	echo "<a href='login.php'>Log in</a>";
	
	
	
}



?>



</div>
</nav>


</body>













</html>