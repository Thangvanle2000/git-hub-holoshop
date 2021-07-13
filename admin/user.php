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
						<div>
						<form action="add-user.php">
						  <h5>User profile</h5> <button type="submit" class="bg-primary text-light">Add User Profile</button>
						</form>
					  </div>
					  <?php 
					  $con = mysqli_connect("localhost","root","","btl");
					   $query = "SELECT * FROM btl_user"; 
					   $query_run = mysqli_query($con,$query);
					  ?>
					  <table class="table-profile" id="datatable" cellspacing= "0" width="100%">  
                        <thead>
							<tr>
								<th>ID</th>
								<th>UserName</th>
								<th>Password</th>
								<th>Name</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<?php 
						if(mysqli_num_rows($query_run)>0)
						{
							while($row = mysqli_fetch_assoc($query_run))
							{
						     if($row['role']=='user'){
						?>
						<tr>
							<td><?php echo  $row['id'];?></td>
							<td><?php echo  $row['username'];?></td>
							<td><?php echo  $row['password'];?></td>
							<td><?php echo  $row['name'];?></td>
							<td>
							<form action="edit-user.php" method="POST"> 
								<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
						        <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
							 </form>
							</td>
							<td>
								<form action="user-index.php" method="POST">
							     <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>"> 
								<button type="submit" onclick="swal('Good Job','Delete Successful','success')"
								 name="delete_btn" class="btn btn-danger">Delete</button></td>
								</form> 
						</tr>
					  <?php	
							 }
					     }
						}
						else{
							echo"No record found";
						}
						?>
						 </table>
                        </div>
                    </div>
                </main>
              
            
            </div>
        </div>
		<script src="js/sweetalert.min.js"></script>
    </body>
</html>
