<?php
include("header.php");

//initializing var
$email = "";
$firstname = "";
$lastname = "";
$errors = array();


//connect to database
$db = mysqli_connect('localhost','root','','upah');

//register user
if (isset($_POST['reg_user'])) {
// receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {    
      array_push($errors, "The two passwords do not match");
    }

  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database(disable)
    $query = "INSERT INTO users (email,firstname,lastname,password) 
  			      VALUES('$email','$firstname','$lastname','$password')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
  
}


  //LOGIN USER
  if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
      array_push($errors, "Email is required");
    }

    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = $password;
      $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['email'] = $email;
  	    $_SESSION['success'] = "You are now logged in";
  	    header('location: index.php');
      }else{
        array_push($errors, "Wrong username/password combination");
      }
    }

  }

 //product.php 
  function addtocart($page){
    if (isset($_SESSION["email"])) {
      switch ($page){

        case 1:
          echo "<button onclick='CartFunction1()'>Add to Cart</button>";
          break;
        case 2:
          echo "<button onclick='CartFunction2()'>Add to Cart</button>";
          break;
        case 3:
          echo "<button onclick='CartFunction3()'>Add to Cart</button>";
          break;
        case 4:
          echo "<button onclick='CartFunction4()'>Add to Cart</button>";
          break;
      }     
    }
  }
//product.php
  $servicesquery1="SELECT * FROM services where ServiceID='1'";
  $result1=mysqli_query($db,$servicesquery1);

  $servicesquery2="SELECT * FROM services where ServiceID='2'";
  $result2=mysqli_query($db,$servicesquery2);

  $servicesquery3="SELECT * FROM services where ServiceID='3'";
  $result3=mysqli_query($db,$servicesquery3);

  $servicesquery4="SELECT * FROM services where ServiceID='4'";
  $result4=mysqli_query($db,$servicesquery4);
  
  //cart.php 
  //calculator
  

 
  
?>

