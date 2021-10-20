<?php
session_start();

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
    $_SESSION['lastname'] = $lastname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }  
}

?>

