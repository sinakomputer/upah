<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>

<title>
	Sign In

</title>

</head>

<style>

/* .myDiv {

  		border: 1px outset red;
  		background-color: lightblue;    
  		text-align: center;
  		margin-bottom: 20px;
  		width: 100%;
  		left: 0;

	 } */


	/* table{

		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	} */

	/* td,th{

		border:1px green;
		text-align: center;
		padding: 8px;
	} */

/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  display: block;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  display: block;  
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 10%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: none;
  display: block;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 30px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
    display: block;
  }
}	

a{
  text-decoration: none;
  color: white;  
}

</style>

<body>

	<form action="SignIn.php" method="post">
    <?php include('errors.php'); ?>
  <div class="imgcontainer">
    <img src="profilepic.png" alt="Avatar" class="avatar">
  </div>

  <div align="center" class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required style="text-align: center;">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required style="text-align: center;">

    <button type="submit" name="login_user">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div align="center" class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">
      <a href="index.php">Cancel</a>
    </button>
    <span class="psw">Forgot <a href="#" style="color: violet;">password?</a></span>
  </div>
  </form>

<script>
// Get the modal
var modal = document.getElementById('id01');
</script>

</body>
</html>

