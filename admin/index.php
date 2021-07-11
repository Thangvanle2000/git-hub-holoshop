<?php 
   session_start();
    ?>
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
                            <li class="breadcrumb-item active" style="font-size: 18px;">Dashboard</li>
                        </ol>
						<h3 class="breadcrumb-item active" style="font-size: 25px;margin-bottom: 20px;">Holoshop Statistics</h3> 
						<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4">
                                    <div class="card-body" style="color:black"><h5>User </h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
										<?php 
										 $con = mysqli_connect("localhost","root","","btl");
										$query = "SELECT id FROM btl_user where role='user'";
										$query_run = mysqli_query($con,$query);
										foreach($query_run as $row){

										}
										?>
                                        <a class="stretched-link" href="user.php" style="text-decoration: none;color: black;">
										<?php echo $row['id']?> User Registered <img src="img/user.png" width="20" height="20"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
								<div class="card-body" style="color:black"><h5>Admin</h5></div>
                                    <div class="bg-light card-footer d-flex align-items-center justify-content-between">
									<?php 
										 $con = mysqli_connect("localhost","root","","btl");
										$query = "SELECT id FROM btl_user where role='admin'";
										$query_run = mysqli_query($con,$query);
										foreach($query_run as $row){

										}
										?>
                                        <a class="stretched-link" href="admin.php" style="text-decoration: none;color: black;">
										<?php echo $row['id']?> Admin availble <img src="img/admin.png" width="20" height="20"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
								<div class="card-body" style="color:black"><h5>Camera</h5></div>
                                    <div class="bg-light card-footer d-flex align-items-center justify-content-between">
									<?php 
										 $con = mysqli_connect("localhost","root","","btl");
										$query = "SELECT id FROM product1";
										$query_run = mysqli_query($con,$query);
										foreach($query_run as $row){

										}
										?>
									<a class=" stretched-link" href="camera.php" style="text-decoration: none;color: black;">
									<?php echo $row['id']?> Camera available <img src="img/camera.png" width="20" height="20"></a>
										</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
								<div class="card-body" style="color:black"><h5>Computer</h5></div>
                                    <div class="bg-light card-footer d-flex align-items-center justify-content-between">
									<?php 
										 $con = mysqli_connect("localhost","root","","btl");
										$query = "SELECT id FROM product2";
										$query_run = mysqli_query($con,$query);
										foreach($query_run as $row){

										}
										?>
									<a class="stretched-link" href="computer.php" style="text-decoration: none;color: black;">
									<?php echo $row['id']?> Computer available<img src="img/laptop-screen.png" width="20" height="20"></a>
										</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
								<div class="card-body" style="color:black"><h5>Device</h5></div>
                                    <div class="bg-light card-footer d-flex align-items-center justify-content-between">
									<?php 
										 $con = mysqli_connect("localhost","root","","btl");
										$query = "SELECT id FROM product3";
										$query_run = mysqli_query($con,$query);
										foreach($query_run as $row){

										}
										?>
									<a class="stretched-link" href="device.php" style="text-decoration: none;color: black;">
									<?php echo $row['id']?> Device available <img src="img/bot.png" width="20" height="20"></a>
										</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
							<h3>Policy</h3>
							<li>Web Holoshop is created by GdragonDat and Thang.</li>
							<li>Admin Holoshop will be updated 2 time/1year.</li>
							<li>You don't delele admin if not need.</li>
							<li>To verify your authenticity,To notify you of updates to this site.</li>
							<li>Holoshop employees should direct any questions about this policy to their direct supervisor. </li>
							<h3>Responsibility</h3>
							<li>Tasks related to administration are often important to keeping a business running efficiently</li>
                            <li>having the responsibility to complete tasks on time and in a quality manner without much oversight is crucial.</li>
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
