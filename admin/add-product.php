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
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
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
						<div class="text-product" style="display: inline-flex">
						<div class="input-product" style="flex-basis: 28%">
						<div class="title-product" style="position: absolute;">
						<h5>Add Camera</h5>
						</div>
						<?php 
						$con = new mysqli('localhost','root','','btl');
						$result =$con->query("SELECT * FROM product1");
						?>
						<form action="computer-index.php" method="POST">
						<br>
						<input type="hidden" name="add_id">
                        <div class="form-group">
							<label> Name:</label>
						<input type="text" name="add_name" class="form-control" placeholder="Enter Name">
						</div>
						<div class="form-group">
							<label> Date:</label>
						<input type="text" name="add_date" class="form-control" placeholder="Enter Date">
						</div>
						<div class="form-group">
							<label>Image:</label>
						<input type="file" name="add_img"class="form-control" placeholder="Enter Image">
						</div>
						<div class="form-group">
							<label>Maxreso:</label>
						<input type="text" name="add_max" class="form-control" placeholder="Enter Maxreso">
						</div>
						
						<div class="form-group">
							<label>Lowreso:</label>
						<input type="text" name="add_low" class="form-control" placeholder="Enter Lowreso">
						</div>
						<div class="form-group">
							<label>Pixel:</label>
						<input type="text" name="add_px" class="form-control" placeholder="Enter Pixel" >
						</div>
						<div class="form-group">
							<label>Zwide:</label>
						<input type="text" name="add_zwide" class="form-control" placeholder="Enter Zwide">
						</div>
						<div class="form-group">
							<label>Ztele:</label>
						<input type="text" name="add_ztele" class="form-control" placeholder="Enter Zlete">
						</div>
						<div class="form-group">
							<label>Macro:</label>
						<input type="text" name="add_macro"class="form-control" placeholder="Enter Macro">
						</div>
						<div class="form-group">
							<label>Weight:</label>
						<input type="text" name="add_w" class="form-control" placeholder="Enter Weight">
						</div>
						<div class="form-group">
							<label>Price:</label>
						<input type="text" name="add_pr" class="form-control" placeholder="Enter Price">
						</div>
						<div class="form-group">
							<label>Type:</label>
						<input type="text" name="add_type" class="form-control" placeholder="Enter Type">
						</div>
						<button type="submit" name="add_camera" class="btn btn-primary" style="margin-left: 100px;">Add Camera</button>
						</form>
</div>
                        <div class="input-product" style="margin-left:70px;">
						<div class="title-product" >
						<h5>Add Computer</h5>
						</div>
						<?php 
						$con = new mysqli('localhost','root','','btl');
						$result =$con->query("SELECT * FROM product2");
						?>
						<form action="computer-index.php" method="POST">
						<input type="hidden" name="add_id">
                        <div class="form-group">
							<label> Brand:</label>
						<input type="text" name="add_brand" class="form-control" placeholder="Enter Brand">
						</div>
						<div class="form-group">
							<label> Name:</label>
						<input type="text" name="add_name"class="form-control" placeholder="Enter Name">
						</div>
						<div class="form-group">
							<label>Image:</label>
						<input type="file" name="add_img"class="form-control" placeholder="Enter Image">
						</div>
						<div class="form-group">
							<label>Category:</label>
						<input type="text" name="add_category"class="form-control" placeholder="Enter Category">
						</div>
						
						<div class="form-group">
							<label>Resolution:</label>
						<input type="text" name="add_ss" class="form-control" placeholder="Enter Resolution">
						</div>
						<div class="form-group">
							<label>IPS:</label>
						<input type="text" name="add_s" class="form-control" placeholder="Enter IPS" >
						</div>
						<div class="form-group">
							<label>CPU:</label>
						<input type="text" name="add_cpu"class="form-control"  placeholder="Enter CPU">
						</div>
						<div class="form-group">
							<label>Storage:</label>
						<input type="text" name="add_storage" class="form-control" placeholder="Enter Storage">
						</div>
						<div class="form-group">
							<label>RAM:</label>
						<input type="text" name="add_ram"class="form-control" placeholder="Enter RAM">
						</div>
						<div class="form-group">
							<label>Weight:</label>
						<input type="text" name="add_w" class="form-control"  placeholder="Enter Weight">
						</div>
						<div class="form-group">
							<label>Price:</label>
						<input type="text" name="add_price" class="form-control" placeholder="Enter Price">
						</div>
						<div class="form-group">
							<label>GPU:</label>
						<input type="text" name="add_gpu" class="form-control" placeholder="Enter GPU">
						</div>
						<button type="submit" name="add_computer" class="btn btn-primary" style="margin-left:100px;">Add Computer</button>
						</form>
                        </div>

						<?php 
						$con = new mysqli('localhost','root','','btl');
						$result =$con->query("SELECT * FROM product3");
						?>
						<div class="input-product" style="margin-left: 70px;">
						<h5>Add Device</h5>
						<form action="computer-index.php" method="POST">
						<input type="hidden" name="add_id">
                        <div class="form-group">
							<label> Subcate:</label>
						<input type="text" name="add_sc" class="form-control" placeholder="Enter Subcategory">
						</div>
						<div class="form-group">
							<label>Brand :</label>
						<input type="text" name="add_brand" class="form-control" placeholder="Enter Brand">
						</div>
						<div class="form-group">
							<label>Image:</label>
						<input type="file" name="add_img" class="form-control">
						</div>
						<div class="form-group">
							<label>Name :</label>
						<input type="text" name="add_name" placeholder="Enter Name" class="form-control">
						</div>
						<div class="form-group">
							<label>Weight:</label>
						<input type="text" name="add_w"  placeholder="Enter Weight" class="form-control">
						</div>
						<div class="form-group">
							<label>Price :</label>
						<input type="text" name="add_price"  placeholder="Enter Price" class="form-control">
						</div>
						<button type="submit" name="add_device" class="btn btn-primary" style="margin-left: 100px;">Add Device</button>
						</form>
						</div>
						</div>
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
