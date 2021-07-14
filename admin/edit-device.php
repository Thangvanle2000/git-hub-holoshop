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
			<div class="Edit-product" style="width: 20%;">
				<h5>Edit Camera</h5>
				<?php 
                      if(isset($_POST['edit_btn'])){
                      $id = $_POST['edit_id'];
                  	  $con = mysqli_connect("localhost","root","","btl");
	                  $query = "SELECT * FROM product3 WHERE id= '$id'";
	                  $query_run = mysqli_query($con,$query);
                      foreach($query_run as $row){

                     }
                        ?>
				<form action="product-index.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_device" value="<?php echo $row['id']?>">
					<div class="form-group">
						<label> Subcategory</label>
						<input type="text" name="edit_sc" value="<?php echo $row['sc'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label> Brand</label>
						<input type="text" name="edit_brand" value="<?php echo $row['br'] ?>" class="form-control">
					</div>
					<img src="../images/<?php echo $row['img']?>" width="80" height="50">
					<div class="form-group">
						<label>Image:</label>
						<input type="hidden" name="available_img" value="<?php echo $row['img'] ?>" class="form-control">
						<input type="file" name="edit_img" value="<?php echo $row['img'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Weight:</label>
						<input type="text" name="edit_w" value="<?php echo $row['w'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Price:</label>
						<input type="text" name="edit_price" value="<?php echo $row['pr'] ?>" class="form-control">
					</div>
					<a href="device.php" class="btn btn-danger">Cancel</a>
					<button type="submit" onclick="swal('Good Job','Update Device Successful','success')"
						name="update_device" class="btn btn-primary">Update</button>
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