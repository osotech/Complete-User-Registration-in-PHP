
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
      <h1 class="page-title text-center text-info">Insert User Data With Prepare Statement Using PDO in PHP</h1>
<form id="register_form mb-3">
<div class="form-group">
  <label for="">First Name</label>
  <input type="text" id="first_name" class="form-control">
  <span id="first_name_error"></span>

</div>
<div class="form-group">
  <label for="">Last Name</label>
  <input type="text" id="last_name" class="form-control">
  <span id="last_name_error"></span>

</div>
<div class="form-group">
  <label for="">E-mail Address</label>
  <input type="text" id="email" class="form-control">
  <span id="email_error"></span>

</div>
<div class="form-group">
  <label for="">Password </label>
  <input type="password" id="password" class="form-control">
  <span id="password_error"></span>

</div>
<div class="form-group">
  <label for="">Confirm Password</label>
  <input type="password" id="cpassword" class="form-control">
  <span id="cpassword_error"></span>

</div>
<button type="button" id="submit-btn" value="submit" class="btn btn-primary ">Register Now</button>
<br>
<p>Already a Member? <a href="login.php">Login</a> </p>
<hr class="mb-3">
<center><p id="response"></p></center>
</form>
    </div>

  </div>
</div>

<script src="bootstrap/jquery-3.3.1.min.js">
</script>
<script src="validation.js">
</script>
  </body>
</html>
