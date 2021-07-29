<?php
session_start();
require ("dbconn.php");

include_once ("functions.php");
if (isset($_POST['login_btn'])) {
  $username = clean_input($_POST['username']);
  $password = clean_input($_POST['password']);

  $check = $dbh->prepare("SELECT * FROM users WHERE email=? || first_name=?");
  $check->execute(array($username,$username));
  if ($check->rowCount()>0) {
  $result = $check->fetch();
  $db_password = $result['password'];
  if (password_verify($password,$db_password)) {
$_SESSION['username'] = $result['first_name'];
$_SESSION['id'] = $result['id'];
$_SESSION['email'] = $result['email'];
$response = "<b class='text-success'>Login Successfull </b><br> Redirecting...
<script>
setTimeout(function(){
  self.location.href='home.php';
},3000);
</script>

";
  }else{
$response = "<b class='text-danger'>Incorrect User Details</b>";
  }
  }else{
  $response = "<b class='text-danger'>Unknown Account</b>";
  }

  echo $response;
}

 ?>
