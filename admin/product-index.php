<?php 
//Edit Computer
$con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['update_computer'])){
   $id = $_POST['edit_id'];
   $name= $_POST['edit_name'];
   $brand = $_POST['edit_brand'];
   $category= $_POST['edit_category'];
   $s = $_POST['edit_s'];
   $cpu = $_POST['edit_cpu'];
   $storage= $_POST['edit_storage'];
   $ram = $_POST['edit_ram'];
   $gpu = $_POST['edit_gpu'];
   $weight = $_POST['edit_w'];
   $price = $_POST['edit_price'];
   $image = $_POST['edit_img'];
   $ss = $_POST['edit_ss'];
   $query = "UPDATE product2 SET name = '$name',brand = '$brand', category='$category',s='$s',img ='$image',
   cpu='$cpu',storage='$storage',ram='$ram',gpu='$gpu,w='$weight',price='$price',ss='$ss' WHERE id= '$id'";
   $query_run = mysqli_query($con,$query);
   if($query_run)
   {
	 header('Location:computer.php');
   }
   else
   {
	echo"Update error";
   }
 }
?>



<?php 
//Edit Camera
$con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['update_camera'])){
   $id = $_POST['edit_id'];
   $name= $_POST['edit_name'];
   $max = $_POST['edit_max'];
   $date= $_POST['edit_date'];
   $low = $_POST['edit_low'];
   $pixel = $_POST['edit_px'];
   $zwide= $_POST['edit_zwide'];
   $ztele = $_POST['edit_ztele'];
   $macro = $_POST['edit_mac'];
   $weight = $_POST['edit_w'];
   $price = $_POST['edit_pr'];
   $image = $_POST['edit_img'];
   $type = $_POST['edit_type'];
   $query = "UPDATE product1 SET name = '$name',date = '$date', maxreso='$max',lowreso='$low',img ='$image',
   pixel='$pixel',zwide='$zwide',ztele='$ztele',macro='$macro',w='$weight',pr='$price',type='$type' WHERE id= '$id'";
   $query_run = mysqli_query($con,$query);
   if($query_run)
   {
	 header('Location:camera.php');
   }
   else
   {
	header('Location:camera.php');
   }
 }
?>



<?php 
$con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['update_computer'])){
   $id = $_POST['id_computer'];
   $name= $_POST['edit_name'];
   $category = $_POST['edit_category'];
   $brand= $_POST['edit_brand'];
   $s = $_POST['edit_s'];
   $cpu = $_POST['edit_cpu'];
   $storage = $_POST['edit_storage'];
   $ram = $_POST['edit_ram'];
   $weight = $_POST['edit_w'];
   $price = $_POST['edit_price'];
   $image = $_POST['edit_img'];
   $ss = $_POST['edit_ss'];
   $gpu = $_POST['edit_gpu'];
   $query = "UPDATE product2 SET name = '$name',brand = '$brand', category='$category',ss='$ss',img ='$image',
   s='$s',gpu='$gpu',storage='$storage',ram='$ram',w='$weight',price='$price',cpu='$cpu' WHERE id= '$id'";
   $query_run = mysqli_query($con,$query);
   if($query_run)
   {
	 header('Location:computer.php');
   }
   else
   {
	header('Location:computer.php');
   }
 }
?>


<?php 
//Delete button camera
$con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['delete_camera'])){
   $id = $_POST['delete_id'];
   $query= "DELETE FROM product1 WHERE id ='$id'";
   $query_run= mysqli_query($con,$query);
   if($query_run)
   {  
	 header('Location:camera.php');
   }
   else
   {
	echo"Update not complete " ;
   }
 }
?>





<?php
//Edit Device 
$con = mysqli_connect("localhost","root","","btl");
if(isset($_POST['update_device'])){
  $id = $_POST['id_device'];
  $name= $_POST['edit_name'];
  $Subcategory= $_POST['edit_sc'];
  $price = $_POST['edit_price'];
  $brand= $_POST['edit_brand'];
  $weight = $_POST['edit_w'];
  $image = $_POST['edit_img'];

  $query = "UPDATE product3 SET name = '$name',br= '$brand',img ='$image',pr='$price',w='$weight',sc='$Subcategory' WHERE id='$id'";
  $query_run = mysqli_query($con,$query);
  if($query_run)
  {
	header('Location:device.php');
  }
  else
  {
   header('Location:device.php');
  }
}
?>

