<?php 
   session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Login Holoshop</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap-4.3.1.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="css/custom.css"  rel="stylesheet">
<script src='main.js'></script>
</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
  <div class="card card0 border-0">
    <div class="row d-flex">
      <div class="col-lg-6">
        <div class="card1 pb-5">
          <div id ="logo"> <a href="index.php"><img src="img/main logo.png" alt="sample logo" > </a></div>
          <div class="img-login"> <img src="img/img-login.jpg" width="500" height="410"> </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card2 card border-0 px-4 py-5">
          <div class="row mb-4 px-3">
            <h1 class="mb-0 mr-4 mt-3">Sign in Holoshop </h1>
          </div>
        </div>
		<?php 
		 if(isset($_GET['error'])){
		?>
		<div class="alert alert-danger" role="alert" style="margin-top: -30px;margin-bottom: 30px;width: 500px;">
            <?=$_GET['error'] ?>
            </div>
		<?php }
		?>
		<form action="check-login.php" method="POST">
        <div class="row px-3">
          <label class="mb-1">
          <h6 class="mb-0 text-sm">Username</h6>
          </label>
        </div>
        <input class="mb-4" type="text" name="username" id="username" placeholder="Enter email address" checked>
        <div class="row px-3">
          <label class="mb-1">
          <h6 class="mb-0 text-sm">Password</h6>
        </div>
        <label>
        	<input type="password" name="password" id="password" placeholder="Enter password" checked>
        	<div class="row px-3 mb-4">
         	<div class="custom-control custom-checkbox custom-control-inline">
				<select name="role" aria-label="#" style="width: 100px; height: 30px;margin-left: -15px;margin-top: 10px">
					<option selected value="user">User</option>
					<option value="admin">Admin</option>
				</select>
			</label>
          </div>
        </div>
        <div class="row mb-3 px-3">
          <button type="submit" class="btn btn-info text-center">Login</button>
        </div>
       
    </div>
	</form>
  </div>
  <div class="bg-dark py-4 text-light">
    <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-1">Copyright &copy;HOLOSHOP. All rights reserved.</small>
      <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
    </div>
  </div>
</div>
</body>
</html>
