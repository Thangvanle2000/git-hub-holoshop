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
						<h5>Edit Camera</h5>
						<?php 
                      if(isset($_POST['edit_btn'])){
                      $id = $_POST['edit_id'];
                  	  $con = mysqli_connect("localhost","root","","btl");
	                  $query = "SELECT * FROM product1 WHERE id= '$id'";
	                  $query_run = mysqli_query($con,$query);
                      foreach($query_run as $row){

                     }
                        ?>
						<form action="product-index.php" method="POST">
						<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                        <div class="form-group">
							<label> Name</label>
						<input type="text" name="edit_name" value="<?php echo $row['name'] ?>"class="form-control">
						</div>
						<div class="form-group">
							<label> Date</label>
						<input type="text" name="edit_date" value="<?php echo $row['date'] ?>"class="form-control">
						</div>
						<img src="../images/<?php echo $row['img']?>" width="80" height="60">
						<div class="form-group">
							<label>Image:</label>
						<input type="text" name="edit_img" value="<?php echo $row['img'] ?>"class="form-control">
						</div>
						<div class="form-group">
							<label>Maxreso:</label>
						<input type="text" name="edit_max" value="<?php echo $row['maxreso'] ?>"class="form-control">
						</div>
						
						<div class="form-group">
							<label>Lowreso:</label>
						<input type="text" name="edit_low" value="<?php echo $row['lowreso'] ?>"class="form-control">
						</div>
						<div class="form-group">
							<label>Pixel:</label>
						<input type="text" name="edit_px" value="<?php echo $row['pixel'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Zwide:</label>
						<input type="text" name="edit_zwide" value="<?php echo $row['zwide'] ?>"class="form-control">
						</div>
						<div class="form-group">
							<label>Ztele:</label>
						<input type="text" name="edit_ztele" value="<?php echo $row['ztele'] ?>"class="form-control">
						</div>
						<div class="form-group">
							<label>Macro:</label>
						<input type="text" name="edit_mac" value="<?php echo $row['macro'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Weight:</label>
						<input type="text" name="edit_w" value="<?php echo $row['w'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Price:</label>
						<input type="text" name="edit_pr" value="<?php echo $row['pr'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Type:</label>
						<input type="text" name="edit_type" value="<?php echo $row['type'] ?>" class="form-control">
						</div>
						<a href="camera.php" class="btn btn-danger">Cancel</a>
						<button type="submit" onclick="swal('Good Job','Update Camera Successful','success')"
						name="update_camera" class="btn btn-primary">Update</button>
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
