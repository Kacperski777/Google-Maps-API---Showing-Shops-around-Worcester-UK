<?php
 session_start();
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,200&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="java.js" charset="utf-8"></script>
<title>ShopMap | Home </title>
<link rel="shortcut icon" type="image/jpg" href="img/favicon.ico">

</head>




<body onLoad="initialize()">





<nav>
<div>

<?php

echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
if (isset($_SESSION["useruid"])){
  echo '<div class="col-lg-12 navigation">';
  echo "<a class='navbar-brand brand' href='index.php'>ShopMap</a>";
  echo "<a class='button home2 button-navigation' href='userprofile.php'>Profile page</a>";
  echo "<a class='button home2 button-navigation' href='includes/logout.inc.php'>Log out</a> </div>";
	echo "<h1 class='welcome'> Hello there " .$_SESSION["useruid"] . " </h1>";
  include 'map.php';



}
else{
	echo '<div class="col-lg-12 navigation">';
  echo "<a class='navbar-brand brand' href='index.php'>ShopMap</a>";
	echo  "<a  class='button home2 button-navigation' href='signup.php'>SIGN UP</a> ";
	echo "<a  class='button home2 button-navigation' href='login.php'> LOGIN</a>";
  echo "</div>";
  include 'index-info.php';

}



?>

</div>
</nav>


</body>













</html>
