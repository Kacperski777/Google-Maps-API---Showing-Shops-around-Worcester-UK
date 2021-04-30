<?php
 session_start();
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,200&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">



<title>ShopMap | UserProfile </title>
<link rel="shortcut icon" type="image/jpg" href="img/favicon.ico">


</script>
</head>




<body>





<nav>
<div class="col-lg-12 navigation">

<?php

echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

if (isset($_SESSION["useruid"])){
  echo '<div class="col-lg-12 navigation">';
  echo "<a class='navbar-brand brand' href='index.php'>ShopMap</a>";
  echo "<a class='button home2 button-navigation' href='includes/logout.inc.php'>Log out</a> ";
  echo "<a class='button home2 button-navigation' href='index.php'>Home</a></div>";

	echo "<h1 class='welcome'> My Profile</h1>";
  echo '<div class="col-lg-12 profile">';
  echo "<a class='button home2 edit ' href='userprofile.php'>Edit Profile</a>";
  echo "<a class='button home2 edit' href='favourites.php'>Favourites </a> ";
  echo "<a class='button home2 edit' href=''>Security </a>";
  echo "<a class='button home2 edit' href=''>Delete Account </a> </div>";

  echo '<div class="container-fluid">';
    echo '<div class="row">';
  echo '<div class="col-xl-5 profile2">';

  echo '<div class="col-xl-12 col-lg-12 profile-image">';
  echo '<p>Search For rated Shops Here </p>';
  echo '<img class="user-image" src="img/favouriteIcon.png" <br> <br>';
  echo'<label>Search your favourite shop here.. </label>';
  echo '<input id="input-field-favourite" type="text">';
  echo '<br>';
  echo '<button type="submit" class="btn-success btn small" onclick="getInputValue();">Submit';
  echo '<a href="favourites.php"><button type="submit" class="btn small btn-primary">Refresh List</button></a>';
  echo "</div>";
  echo "<ul> </ul>";




}
else{

  echo "<a class='navbar-brand brand' href='index.php'>ShopMap</a>";
	echo  "<a  class='button home2 button-navigation' href='signup.php'>SIGN UP</a> ";
	echo "<a  class='button home2 button-navigation' href='login.php'> LOGIN</a>";
}



?>

</div>
</nav>

<script src="javaPlaces.js" charset="utf-8"></script>
</body>













</html>
