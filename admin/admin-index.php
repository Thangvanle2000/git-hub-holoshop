
<?php
//Edit Admin 
   $con = mysqli_connect("localhost","root","","btl");
   if(isset($_POST['update_btn'])){
   $id = $_POST['edit_id'];
   $username = $_POST['edit_username'];
   $password= $_POST['edit_password'];
   $name = $_POST['edit_name'];
   $query = "UPDATE btl_user SET username = '$username',password = '$password', name='$name' WHERE id= '$id'";
   $query_run = mysqli_query($con,$query);
   if($query_run)
   {
	 header('Location:admin.php');
   }
   else
   {
	 header('Location:admin.php');
   }
 }
?>



<?php
//Delte User 
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
//Add User
	  $con= mysqli_connect("localhost","root","","btl");
      if(isset($_POST['save_user'])){
	  $username = $_POST['add_username'];
	  $password = $_POST['add_password'];
	  $name = $_POST['add_name'];
	  $role = $_POST['add_role'];
      $query = "INSERT INTO btl_user (username,role,password,name) VALUES ('$username','$role','$password','$name')";
	  $query_run= mysqli_query($con,$query);
	  if($query_run)
	  {
	   header('Location:user.php');
	  }
	  else
	  {
	   header('Location:user.php');
	  }
  }
 ?>