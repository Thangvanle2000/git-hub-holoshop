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
						<form action="add-product.php">
						  <h5>Camera profile</h5> <button type="submit" class="bg-primary text-light">Add Camera Profile</button>
						</form>
					  </div>
					  <?php 
					   $con = mysqli_connect("localhost","root","","btl");
					   $query = "SELECT * FROM product1";
					   $query_run = mysqli_query($con,$query);
					  ?>
					  <table class="table-profile" id="datatable" cellspacing= "0" width="100%">  
                        <thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Date</th>
								<th>Image</th>
								<th>Maxreco</th>
								<th>Lowreso</th>
								<th>Pixel</th>
								<th>Zwide</th>
								<th>Ztele</th>
								<th>Macro</th>
								<th>Weight</th>
								<th>Price</th>
								<th>Type</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<?php 
						if(mysqli_num_rows($query_run)>0)
						{
							while($row = mysqli_fetch_assoc($query_run))
							{
						?>
						<tr>
							<td><?php echo  $row['id'];?></td>
							<td><?php echo  $row['name'];?></td>
							<td><?php echo  $row['date'];?></td>
							<td><img src="../images/<?php echo $row['img'];?>" width="100" height="50"></td>
							<td><?php echo  $row['maxreso'];?></td>
							<td><?php echo  $row['lowreso'];?></td>
							<td><?php echo  $row['pixel'];?></td>
							<td><?php echo  $row['zwide'];?></td>
							<td><?php echo  $row['ztele'];?></td>
							<td><?php echo  $row['macro'];?></td>
							<td><?php echo  $row['w'];?></td>
							<td><?php echo  $row['pr'];?></td>
							<td><?php echo  $row['type'];?></td>
							<td>
							<form action="edit-camera.php" method="POST"> 
								<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
						        <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
							 </form>
							</td>
							<td>
								<form action="product-index.php" method="POST">
							     <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>"> 
								<button type="submit" onclick="swal('Good Job','Delete Successful','success')" 
								name="delete_camera" class="btn btn-danger">Delete</button>
								</form> 
								</td>
					  <?php	
							 
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
