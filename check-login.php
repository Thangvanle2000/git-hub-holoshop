<?php
   session_start();
   include('inc/connect.php'); 
   if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role']))
   {
    function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);
	if(empty($username))
	{
		header("Location: Login-Register.php?error=Username is Required");
	}
	else if(empty($password))
	{
        header("Location: Login-Register.php?error=Password is Required");
	}
   else{
	 $sql = "SELECT * FROM btl_user WHERE username='$username' AND password='$password'";
	 $result = mysqli_query($con,$sql);
	 if (mysqli_num_rows($result) === 1) {
		// the user name must be unique
		$row = mysqli_fetch_assoc($result);
		if ($row['password'] === $password && $row['role'] == $role) {
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			
			$_SESSION['username'] = $row['username'];
         
			if($row['role'] == 'admin'){
			$_SESSION['admin'] = 'admin';		
			header("Location: admin/index.php");
			}
			else{
				header("Location: index.php");
			}

		}
		else {
			header("Location: Login-Register.php?error=Incorect User name or password");
		}
	}else {
		header("Location: Login-Register.php?error=Incorect User name or password");
	}

}

}else {
header("Location: Login-Register.php");
}