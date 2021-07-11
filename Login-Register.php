<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Login Holoshop</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap-4.3.1.css'>
<link href="css/custom.css"  rel="stylesheet">
<script src='main.js'></script>
</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
  <div class="card card0 border-0">
    <div class="row d-flex">
      <div class="col-lg-6">
        <div class="card1 pb-5">
          <div id ="logo"> <a href="index.php"><img src="images/main logo.png" alt="sample logo" > </a></div>
          <div class="img-login"> <img src="images/img-login.jpg" width="500" height="410"> </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card2 card border-0 px-4 py-5">
          <div class="row mb-4 px-3">
            <h1 class="mb-0 mr-4 mt-3">Sign in Holoshop </h1>
          </div>
        </div>
        <div class="row px-3">
          <label class="mb-1">
          <h6 class="mb-0 text-sm">Email Address</h6>
          </label>
        </div>
        <input class="mb-4" type="email" name="email" placeholder="Enter email address" checked>
        <div class="row px-3">
          <label class="mb-1">
          <h6 class="mb-0 text-sm">Password</h6>
        </div>
        <label>
        	<input type="password" name="password" placeholder="Enter password" checked>
        	<div class="row px-3 mb-4">
         	<div class="custom-control custom-checkbox custom-control-inline">
            <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
            <label for="chk1" class="custom-control-label text-sm">Remember me</label>
          </div>
        </div>
        <div class="row mb-3 px-3">
          <button type="submit" class="btn btn-info text-center">Login</button>
        </div>
        <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div>
      </div>
    </div>
  </div>
  <div class="bg-dark py-4 text-light">
    <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-1">Copyright &copy;HOLOSHOP. All rights reserved.</small>
      <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
    </div>
  </div>
  <div class="backto-home"><a href="index.php"> >>>Back to home </a></div>
</div>
</body>
</html>