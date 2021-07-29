<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] ==="") {
header("Location: index.php");
exit();
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2> Hi, <?php echo $_SESSION['username'];?><br>
welcome Back! </h2>
<p>.....</p>
<p> Logout <a href="logut.php"> Click Here</a> </p>
  </body>
</html>
