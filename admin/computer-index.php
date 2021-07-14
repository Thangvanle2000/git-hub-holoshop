

<?php 
//Add Computer
 $con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['add_computer'])){
	$id = $_POST['add_id'];
	$name= $_POST['add_name'];
	$category = $_POST['add_category'];
	$brand= $_POST['add_brand'];
	$s = $_POST['add_s'];
	$cpu = $_POST['add_cpu'];
	$storage = $_POST['add_storage'];
	$ram = $_POST['add_ram'];
	$weight = $_POST['add_w'];
	$price = $_POST['add_price'];
	
	//Update file Image
	$target= "../images/" .basename($_FILES['add_img'] ['name']);
    $image = $_FILES['add_img']['name'];
	if(move_uploaded_file ($_FILES['add_img']['tmp_name'],$target)){
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
         && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
       }
	else if ($_FILES["add_img"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
	   }
	else{
		echo "Failed Update Image";
	  }       
	  }
	else{
		  $smg ="Fail image update";
	}
    $image = $_FILES['add_img']['name'];
	$ss = $_POST['add_ss'];
	$gpu = $_POST['add_gpu'];
	$query ="INSERT INTO product2 (name,category,brand,s,cpu,storage,gpu,ram,w,price,img,ss) VALUES(
    '$name','$category','$brand','$s','$cpu','$storage','$gpu','$ram','$weight','$price','$image','$ss')";
	$query_run= mysqli_query($con,$query);
	if($query_run){
		header('Location:computer.php');
	}
	else{
		echo"OOPS";
	}
 }
?>



<?php 
//Add Camera
 $con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['add_camera'])){
	$id = $_POST['add_id'];
	$name= $_POST['add_name'];
	$date = $_POST['add_date'];
	$max= $_POST['add_max'];
	$low= $_POST['add_low'];
	$px = $_POST['add_px'];
	$zwide = $_POST['add_zwide'];
	$ztele = $_POST['add_ztele'];
	$weight = $_POST['add_w'];
	$price = $_POST['add_pr'];
	
	//Update file Image
	$target= "../images/" .basename($_FILES['add_img'] ['name']);
    $image = $_FILES['add_img']['name'];
	if(move_uploaded_file ($_FILES['add_img']['tmp_name'],$target)){
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
         && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
       }
	else if ($_FILES["add_img"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
	   }
	else{
		echo "Failed Update Image";
	  }       
	  }
	else{
		  $smg ="Fail image update";
	  }
    $image = $_FILES['add_img']['name'];
	$macro = $_POST['add_macro'];
	$type = $_POST['add_type'];
	$query ="INSERT INTO product1 (id,name,date,maxreso,lowreso,pixel,zwide,ztele,macro,w,pr,img,type) VALUES(
    '$id','$name','$date','$max','$low','$px','$zwide','$ztele','$macro','$weight','$price','$image','$type')";
	$query_run= mysqli_query($con,$query);
	if($query_run){
		header('Location:camera.php');
	}
	else{
		echo"OOPS";
	}
 }
?>



<?php 
//Delete button Computer
$con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['delete_computer'])){
   $id = $_POST['delete_id'];
   $query= "DELETE FROM product2 WHERE id ='$id'";
   $query_run= mysqli_query($con,$query);
   if($query_run)
   {  
	 header('Location:computer.php');
   }
   else
   {
	echo"Update not complete " ;
   }
 }
?>



<?php 
//Delete button Device
$con = mysqli_connect("localhost","root","","btl");
 if(isset($_POST['delete_device'])){
   $id = $_POST['delete_id'];
   $query= "DELETE FROM product3 WHERE id ='$id'";
   $query_run= mysqli_query($con,$query);
   if($query_run)
   {  
	 header('Location:device.php');
   }
   else
   {
	echo"Update not complete " ;
   }
 }
?>



<?php 
// ADD Device
   $con = mysqli_connect("localhost","root","","btl");
   if(isset($_POST['add_device'])){
	  $id = $_POST['add_id'];
	  $name= $_POST['add_name'];
	  $sc = $_POST['add_sc'];
	  $weight = $_POST['add_w'];
	  $price = $_POST['add_price'];
	  $brand = $_POST['add_brand'];

	    // Update File Image
	  $target= "../images/" .basename($_FILES['add_img'] ['name']);
	  $image = $_FILES['add_img']['name'];
	  if(move_uploaded_file ($_FILES['add_img']['tmp_name'],$target)){
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
         && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
       }
	  else if ($_FILES["add_img"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
	   }
	  else{
		echo "Failed Update Image";
	  }       
	  }
  	 else{
		echo "Fail image update";
	  }

      $image = $_FILES['add_img']['name'];
	  $query ="INSERT INTO product3 (name,sc,br,w,pr,img) VALUES('$name','$sc','$brand','$weight','$price','$image')";
	  $query_run= mysqli_query($con,$query);
	  if($query_run){
		  header('Location:device.php');
	  }
	  else{
		  echo"OOPS";
	  }
   }
?>
