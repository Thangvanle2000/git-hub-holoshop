<?php 
//Edit User
$con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['update_btn'])){
   $id = $_POST['edit_id'];
   $username = $_POST['edit_username'];
   $password= $_POST['edit_password'];
   $name = $_POST['edit_name'];
   $query = "UPDATE btl_user SET username = '$username',password = '$password', name='$name' WHERE id= '$id'";
   $query_run = mysqli_query($con,$query);
   if($row['role' == 'user']){
 
   if($query_run)
   {
	 header('Location:user.php');
   }
   else
   {
	header('Location:user.php');
   }
}  else{
	header('Location:user.php');
}

 }
?>


<?php 
//Delete button User
$con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['delete_btn'])){
   $id = $_POST['delete_id'];
   $query= "DELETE FROM btl_user WHERE id ='$id'";
   $query_run= mysqli_query($con,$query);
   if($query_run)
   {  
	 $success= "Your Data is Updated";
     echo "<script type='text/javascript'>alert($success)</script>";
	 header('Location:user.php');
   }
   else
   {
	$fail= "Your Data is not Updated";
	echo "<script type='text/javascript'>alert($fail)</script>";
	header('Location:user.php');
   }
 }
?>

<?php 
//ADD User
 $con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['add_user'])){
	$id = $_POST['add_id'];
	$username = $_POST['add_username'];
	$password= $_POST['add_password'];
	$name = $_POST['add_name'];
	$query = "INSERT INTO btl_user (username,password,name)VALUES('$username','$password','$name')";
	$query_run= mysqli_query($con,$query);
	if($query_run)
	{  
	  $success= "Your Data is Updated";
	  echo "<script type='text/javascript'>alert($success)</script>";
	  header('Location:user.php');
	}
	else
	{
	 $fail= "Your Data is not Updated";
	 echo "<script type='text/javascript'>alert($fail)</script>";
	 header('Location:user.php');
	}
  }
?>
