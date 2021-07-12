<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>HOLOSHOP</title>
	  <link rel="icon" href="images/favicon.png" type="image/x-icon"/>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Material Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="10507670343-3uafv0endtnjas5hcpqb4f3g025hgtk0.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
<div class="main">
  <form method="post" class="" action="">
    <div class="head"> <a href="index.php"><img src="images/main logo.png" alt=""  height="100px" width="auto"></a>
      <h3>Create your Holoshop account</h3>
    </div>
    <div class="name">
      <input type="name" name="fname" id="fname" required>
      <label>First name</label>
    </div>
    <div class="name">
      <input type="name" name="lname" id="lname" required>
      <label>Last name</label>
    </div>
    <div class="user-name">
      <input type="username" name="userID" id="userID" required>
      <label>Username</label>
      <span class="gmail">@gmail.com</span> </div>
    <a class="line1">You can use letters, numbers & periods</a> 
	 <a  class="line2" onclick = "femail()" >Use a test account</a>
    <div class="pass">
      <input type="password" class="password" name="pass1" id="pass1" required>
      <label>Password</label>
    </div>
    <div class="pass">
      <input type="password" class="password" id="pass2" required>
      <label>Confirm</label>
    </div>
    <div class="iconeye"> <img src="images/eyehide.png" alt="eye" onclick="show();" id="eye"> </div>
    <p class="line3 " id="pcheck">Use 8 or more characters with a mix of letters, numbers & symbols</p>
	 <a class="line35" id="ccheck" style="visibility: hidden;">Those passwords didn’t match. Try again.&nbsp;</a>
	  <a href="Login-Register.php" class="line4">Sign in instead</a>
    <input id="regis" type="submit" value="Sign up">
	  <br>
	  
	  <?php
	
	
	?>	
  </form>
	<?php 
//Add User
	  $con= mysqli_connect("localhost","root","","btl");
  if(isset($_POST['pass1'])){
	  $username = $_POST['fname'].$_POST['lname'];
	  $password = $_POST['pass1'];
	  $name = $_POST['userID'];
	  
      $query = "INSERT INTO btl_user (username,role,password,name) VALUES ('$username','user','$password','$name')";
	  $query_run= mysqli_query($con,$query);
	  if($query_run)
	  {
		header('Location: index.php');
	  }
	  
			
			$_SESSION['name'] = $name;
	  		
  }
 ?>
  <div class="side-image">
      <img src="images/img-login.jpg" alt="" class="side-logo">
    </div>
</div>

<script type="text/javascript">
	function femail(){
	document.getElementById("fname").value = "SieuNhan";
	document.getElementById("lname").value = "CuongPhong";
	document.getElementById("userID").value = "SieuNhanCuongPhong";
	
	
}
{
var password = document.getElementById("pass1");
var confirm = document.getElementById("pass2");
var pcheck = 0, ccheck = 0;	
confirm.addEventListener("keyup", function() {
  checkconfirm(password.value , confirm.value);
});


password.addEventListener("keyup", function() {
  checkpassword(password.value);
});

function checkconfirm(a,b){
	document.getElementById("ccheck").style.visibility = "visible"
	if (a!=b){
	  ccheck = 0;
	  document.getElementById("regis").disabled = true;
	  document.getElementById("ccheck").innerHTML = "Those passwords didn’t match. Try again.";
	  document.getElementById("ccheck").style.color = "red";
	  
  }else if(b!=""){
	  ccheck = 1;
	  document.getElementById("ccheck").innerHTML = "Password and Confirm are matched. "
	  document.getElementById("ccheck").style.color = "green";
  }
	if(pcheck==1&&ccheck==1){
		document.getElementById("regis").disabled = false;
	}
}
function checkpassword(password) {
  var strength = 0;
  if (password.match(/[a-z]+/)) {
    strength += 1;
  }
  if (password.match(/[A-Z]+/)) {
    strength += 1;
  }
  if (password.match(/[0-9]+/)) {
    strength += 1;
  }
  if (password.match(/[$@#&!]+/)) {
    strength += 1;

  }

  

  if (strength<4){
	  pcheck=0;
	  document.getElementById("regis").disabled = true;
	  document.getElementById("pcheck").innerHTML = "Password is not strong enough";
	  document.getElementById("pcheck").style.color = "red";
	  
  }else{
	  pcheck = 1;
	  document.getElementById("pcheck").innerHTML = "Password is strong"
	  document.getElementById("pcheck").style.color = "green";
  }
	if(pcheck==1&&ccheck==1){
		document.getElementById("regis").disabled = false;
	}
 }
}
    function show(){

      var password= document.getElementById('pass1');
      confirm= document.getElementById('pass2');
      image= document.getElementById('eye');

      if (password.type==="password",confirm.type==="password") {
        password.type="text";
        confirm.type="text";
        image.setAttribute('src', 'images/eyeshow.png');

      }else if (password.type==="text",confirm.type==="text"){
        password.type="password";
        confirm.type="password";
        image.setAttribute('src', 'images/eyehide.png');
      }
    }

    </script>
</body>
</html>
