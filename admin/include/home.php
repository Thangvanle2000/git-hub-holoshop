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
										<?php echo $row['id']?> User Registered <img src="../images/user.png" width="20" height="20"></a>
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
										<?php echo $row['id']?> Admin availble <img src="../images/admin.png" width="20" height="20"></a>
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
									<?php echo $row['id']?> Camera available <img src="../images/camera.png" width="20" height="20"></a>
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
									<?php echo $row['id']?> Computer available<img src="../images/laptop-screen.png" width="20" height="20"></a>
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
									<?php echo $row['id']?> Device available <img src="../images/bot.png" width="20" height="20"></a>
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
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
 