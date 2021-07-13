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
						<div class="edit-user" style="width: 20%;">
						<h5>Edit User</h5>
						<?php 
                      if(isset($_POST['edit_btn'])){
                      $id = $_POST['edit_id'];
                  	  $con = mysqli_connect("localhost","root","","btl");
	                  $query = "SELECT * FROM btl_user WHERE id= '$id'";
	                  $query_run = mysqli_query($con,$query);
                      foreach($query_run as $row){

                     }
                        ?>
						<form action="admin-index.php" method="POST">
						<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                        <div class="form-group">
							<label> Username:</label>
						<input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label> Password:</label>
						<input type="text" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label> Name:</label>
						<input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control">
						</div>
						<button type="submit"onclick="swal('Good Job','Update Admin Successful','success')"  
						name="update_btn" class="btn btn-primary">Update</button>
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
