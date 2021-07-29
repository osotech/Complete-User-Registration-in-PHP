
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert User Data With Prepare Statement Using PDO in PHP</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  </head>

  <body>
<div class="container">
  <div class="row">
    <div class="col-md-6 justify-content-center">
      <h1 class="page-title text-center text-info">Login Page</h1>
<form id="register_form mb-3">

<div class="form-group">
  <label for="">Username</label>
  <input type="text" id="username" class="form-control" placeholder="Username or Email">
  <span id="username_error"></span>

</div>
<div class="form-group">
  <label for="">Password </label>
  <input type="password" id="password" class="form-control">
  <span id="password_error"></span>

</div>

<button type="button" id="login-btn" value="submit" class="btn btn-primary ">Login Now</button>
<br />
<p>New to Osotech? <a href="index.php">Register Now</a> </p>
<hr class="mb-3">
<center><p id="response"></p></center>
</form>
    </div>

  </div>
</div>

<script src="bootstrap/jquery-3.3.1.min.js">
</script>
<script src="login.js">
</script>
  </body>
</html>
