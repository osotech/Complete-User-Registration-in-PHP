<?php include_once("dbconn.php");
include_once ("functions.php");

if (isset($_POST['submit_btn'])) {
$first_name = clean_input($_POST['first_name']);
$last_name = clean_input($_POST['last_name']);
$password = clean_input($_POST['password']);
$email = clean_input($_POST['email']);
$date = date("Y-m-d");
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$response = "<p class='text-danger text-center'> Invalid Email Address</p>";
}else{
//check for duplicate in our db

$check = $dbh->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
$check->execute(array($email));
if ($check->rowCount()==1) {
  $response = "<p class='text-danger text-center'>User with this Email Address already taken</p>";
}else{
  $pwd = password_hash($password,PASSWORD_DEFAULT);
  $query = "INSERT INTO users (first_name,last_name,email,password,created_at) VALUES (?,?,?,?,?);";
  $result = $dbh->prepare($query);
  if ($result->execute(array($first_name,$last_name,$email,$pwd,$date))) {
      $response = "<p class='text-success text-center'>Account Resgitered Successfully!</p>";
  }else{
      $response = "<p class='text-danger text-center'>Something went wrong... Try again</p>";
  }
}
}
echo $response;
unset($dbh);
}
