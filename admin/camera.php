<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Holoshop</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
			<a class="navbar-brand ps-3" href="index.php">Admin Holoshop <img src="img/favicon.png" width="30" height="30"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Config page</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="user.php">User</a>
                                            <a class="nav-link" href="admin.php">Admin</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Product
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
										<a class="nav-link" href="camera.php">Camera</a>
											<a class="nav-link" href="computer.php">Computer</a>
											<a class="nav-link" href="device.php">Device</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                </nav>
            </div>
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
								<button type="submit" name="delete_camera" class="btn btn-danger">Delete</button>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!--<script>
			swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
           }); -->
		</script>
    </body>
</html>
