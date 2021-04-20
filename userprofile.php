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

<title>ShopMap | UserProfile </title>
<link rel="shortcut icon" type="image/jpg" href="img/favicon.ico">

</head>




<body>





<nav>
<div>

<?php

echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

if (isset($_SESSION["useruid"])){
  echo '<div class="col-lg-12 navigation">';
  echo "<a class='navbar-brand brand' href='index.php'>ShopMap</a>";
  echo "<a class='button home2 button-navigation' href='includes/logout.inc.php'>Log out</a> ";
  echo "<a class='button home2 button-navigation' href='index.php'>Home</a></div>";

	echo "<h1 class='welcome'> My Profile</h1>";
  echo '<div class="col-lg-12 profile">';
  echo "<a class='button home2 edit ' href=''>Edit Profile</a>";
  echo "<a class='button home2 edit' href=''>Favourites </a> ";
  echo "<a class='button home2 edit' href=''>Security </a>";
  echo "<a class='button home2 edit' href=''>Delete Account </a> </div>";


  echo '<div class="col-lg-12 profile2">';
  echo '<div class="row">';
  echo '<div class="col-lg-3 profile-image">';
  echo '<img class="user-image" src="img/placeholder-userimage.png"> ';
  echo "</div>";
  echo '<div class="col-lg-9 user-info">';
  echo "<p> " .$_SESSION["fullname"] . "</p>";
  echo "<p> " .$_SESSION["useruid"] . "</p>";
  echo "<p>" .$_SESSION["Email"] . "</p>";
  echo "</div>";




}
else{
	echo '<div class="col-lg-12 navigation">';
  echo "<a class='navbar-brand brand' href='index.php'>ShopMap</a>";
	echo  "<a  class='button home2 button-navigation' href='signup.php'>SIGN UP</a> ";
	echo "<a  class='button home2 button-navigation' href='login.php'> LOGIN</a>";

}



?>

</div>
</nav>


</body>













</html>
