<?php 
  include('include/header.php');
  include('include/left.php');
?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4" style="color: blueviolet;">Welcome to admin Holoshop!</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<div class="Edit-product" style="width: 25%;">
				<h5>Edit Computer</h5>
				<?php 
                      if(isset($_POST['edit_btn'])){
                      $id = $_POST['edit_id'];
                  	  $con = mysqli_connect("localhost","root","","btl");
	                  $query = "SELECT * FROM product2 WHERE id= '$id'";
	                  $query_run = mysqli_query($con,$query);
                      foreach($query_run as $row){
                     }
                        ?>
				<form action="product-index.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_computer" value="<?php echo $row['id']?>" class="form-control">
					<div class="form-group">
						<label> Brand:</label>
						<input type="text" name="edit_brand" value="<?php echo $row['brand'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label> Name:</label>
						<input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Category:</label>
						<input type="text" name="edit_category" value="<?php echo $row['category'] ?>"
							class="form-control">
					</div>
					<img src="../images/<?php echo $row['img']?>" width="80" height="50">
					<div class="form-group">
						<label>Image:</label>
						<input type="hidden" name="available_img" value="<?php echo $row['img'] ?>" class="form-control">
						<input type="file" name="edit_img" value="<?php echo $row['img'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>IPS:</label>
						<input type="text" name="edit_s" value="<?php echo $row['s'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>CPU:</label>
						<input type="text" name="edit_cpu" value="<?php echo $row['cpu'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Storage:</label>
						<input type="text" name="edit_storage" value="<?php echo $row['storage'] ?>"
							class="form-control">
					</div>
					<div class="form-group">
						<label>RAM:</label>
						<input type="text" name="edit_ram" value="<?php echo $row['ram'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>GPU:</label>
						<input type="text" name="edit_gpu" value="<?php echo $row['gpu'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Weight:</label>
						<input type="text" name="edit_w" value="<?php echo $row['w'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Price:</label>
						<input type="text" name="edit_price" value="<?php echo $row['price'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Resolution:</label>
						<input type="text" name="edit_ss" value="<?php echo $row['ss'] ?>" class="form-control">
					</div>
					<a href="computer.php" class="btn btn-danger">Cancel</a>
					<button type="submit" onclick="swal('Good Job','Update Computer Successful','success')"
						name="update_computer" class="btn btn-success">Update</button>
				</form>
			</div>
			<?php }?>
		</div>
</div>
</main>
</div>
</div>
<script src="js/sweetalert.min.js"></script>
</body>

</html>