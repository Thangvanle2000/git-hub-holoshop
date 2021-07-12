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
						<form action="product-index.php" method="POST">
						<input type="hidden" name="id_computer" value="<?php echo $row['id']?>">
                        <div class="form-group">
							<label> Brand:</label>
						<input type="text" name="edit_brand" value="<?php echo $row['brand'] ?>">
						</div>
						<div class="form-group">
							<label> Name:</label>
						<input type="text" name="edit_name" value="<?php echo $row['name'] ?>">
						</div>
						<div class="form-group">
							<label>Category:</label>
						<input type="text" name="edit_category" value="<?php echo $row['category'] ?>">
						</div>
						<img src="../images/<?php echo $row['img']?>" width="80" height="50">
						<div class="form-group">
							<label>Image:</label>
						<input type="text" name="edit_img" value="<?php echo $row['img'] ?>">
						</div>
						<div class="form-group">
							<label>IPS:</label>
						<input type="text" name="edit_s" value="<?php echo $row['s'] ?>" >
						</div>
						<div class="form-group">
							<label>CPU:</label>
						<input type="text" name="edit_cpu" value="<?php echo $row['cpu'] ?>">
						</div>
						<div class="form-group">
							<label>Storage:</label>
						<input type="text" name="edit_storage" value="<?php echo $row['storage'] ?>">
						</div>
						<div class="form-group">
							<label>RAM:</label>
						<input type="text" name="edit_ram" value="<?php echo $row['ram'] ?>" >
						</div>
						<div class="form-group">
							<label>GPU:</label>
						<input type="text" name="edit_gpu" value="<?php echo $row['gpu'] ?>" >
						</div>
						<div class="form-group">
							<label>Weight:</label>
						<input type="text" name="edit_w" value="<?php echo $row['w'] ?>" >
						</div>
						<div class="form-group">
							<label>Price:</label>
						<input type="text" name="edit_price" value="<?php echo $row['price'] ?>">
						</div>
						<div class="form-group">
							<label>Resolution:</label>
						<input type="text" name="edit_ss" value="<?php echo $row['ss'] ?>">
						</div>
						<a href="computer.php" class="btn btn-danger">Cancel</a>
						<button type="submit" name="update_computer" class="btn btn-primary">Update</button>
						</form>
						<?php }?>
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
    </body>
</html>
