<?php
  session_start();

  //if the user is already logged in then redirect user to index page
  if (isset($_SESSION["email"]) && $_SESSION["email"] === true) {
      header("location: index.php");
      exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="upah.css">
</head>
<body>
	<div class="topnav">
		<div class="topnavlogo">
      <img src="upah_transparent.png" width="150">
    </div>
    <?php
      if (isset($_SESSION["email"])) {
        echo "<a href='SignOut.php'>SIGN OUT</a>";
        echo "<a href='Profile.php'>PROFILE</a>";
      } else {
        echo "<a href='SignUp.php'>SIGN UP</a>";
        echo "<a href='SignIn.php'>SIGN IN</a>";
      }
      
    ?>
    <a href="Product.php">SERVICES</a>
    <a href="index.php">HOME</a>
	</div>
<br>