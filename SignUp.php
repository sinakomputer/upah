<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="upah.css">
</head>
<style>

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  text-align: center;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 50%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #ccff66;
  padding-top: 20px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #333;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  width: 30%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #ccff66;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
  

}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}	

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  color: white; 
  background: #333; 
  border-radius: 5px; 
  text-align: center;
}

a{
  text-decoration: none;
  color: white;  
}

body{
  scrollbar-width: none;	
  overflow-y:scroll;		
}

body::-webkit-scrollbar{
  display: none;
}


</style>

<body>

<h1 style="text-align: center;">Create your Upah account </h1>

<form  method='post' class="modal-content" action="SignUp.php">
  <?php include('errors.php'); ?>
    <div class="container">
      <div align="center">
      <input align="center" type="text" placeholder="Enter Email" name="email" required value="<?php echo $email; ?>"">
      <input align="center" type="text" placeholder="First Name" name="firstname" required value="<?php echo $firstname; ?>"">
      <input align="center" type="text" placeholder="Last Name" name="lastname" required value="<?php echo $lastname; ?>"">      
      <input type="password" placeholder="Enter Password" name="password_1" required>     
      <input type="password" placeholder="Repeat Password" name="password_2" required>     
    </div>
      <p align="center" style="color: whitesmoke;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
          <a href="index.php" style="display: block;">Cancel</a>
        </button>
        <button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
      </div>
    </div>
  </form>
  <div style="background-color: blue;height:100%;font-size:100%;width:100%;
  text-align : center;color:blue;">
    <?php 
      include_once "footer.php";
    ?>
  </div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>	