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
						<div class="text-product" style="display: inline-flex">
						<div class="input-product" style="flex-basis: 28%">
						<div class="title-product" style="position: absolute;">
						<h5>Add Camera</h5>
						</div>
						<?php 
						$con = new mysqli('localhost','root','','btl');
						$result =$con->query("SELECT * FROM product1");
						?>
						<form action="computer-index.php" method="POST" enctype="multipart/form-data">
						<br>
						<input type="hidden" name="add_id">
                        <div class="form-group">
							<label> Name:</label>
						<input type="text" name="add_name" class="form-control" placeholder="Enter Name" required>
						</div>
						<div class="form-group">
							<label> Date:</label>
						<input type="text" name="add_date" class="form-control" placeholder="Enter Date"required>
						</div>
						<div class="form-group">
							<label>Image:</label>
						<input type="file" name="add_img"class="form-control" placeholder="Enter Image" required>
						</div>
						<div class="form-group">
							<label>Maxreso:</label>
						<input type="text" name="add_max" class="form-control" placeholder="Enter Maxreso" required>
						</div>
						
						<div class="form-group">
							<label>Lowreso:</label>
						<input type="text" name="add_low" class="form-control" placeholder="Enter Lowreso" required>
						</div>
						<div class="form-group">
							<label>Pixel:</label>
						<input type="text" name="add_px" class="form-control" placeholder="Enter Pixel" required>
						</div>
						<div class="form-group">
							<label>Zwide:</label>
						<input type="text" name="add_zwide" class="form-control" placeholder="Enter Zwide" required>
						</div>
						<div class="form-group">
							<label>Ztele:</label>
						<input type="text" name="add_ztele" class="form-control" placeholder="Enter Zlete" required>
						</div>
						<div class="form-group">
							<label>Macro:</label>
						<input type="text" name="add_macro"class="form-control" placeholder="Enter Macro" required>
						</div>
						<div class="form-group">
							<label>Weight:</label>
						<input type="text" name="add_w" class="form-control" placeholder="Enter Weight" required>
						</div>
						<div class="form-group">
							<label>Price:</label>
						<input type="text" name="add_pr" class="form-control" placeholder="Enter Price" required>
						</div>
						<div class="form-group">
							<label>Type:</label>
						<input type="text" name="add_type" class="form-control" placeholder="Enter Type" required>
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
						<form action="computer-index.php" method="POST" enctype="multipart/form-data"> 
						<input type="hidden" name="add_id">
                        <div class="form-group">
							<label> Brand:</label>
						<input type="text" name="add_brand" class="form-control" placeholder="Enter Brand" required> 
						</div>
						<div class="form-group">
							<label> Name:</label>
						<input type="text" name="add_name"class="form-control" placeholder="Enter Name" required>
						</div>
						<div class="form-group">
							<label>Image:</label>
						<input type="file" name="add_img"class="form-control" placeholder="Enter Image" required>
						</div>
						<div class="form-group">
							<label>Category:</label>
						<input type="text" name="add_category"class="form-control" placeholder="Enter Category" required>
						</div>
						
						<div class="form-group">
							<label>Resolution:</label>
						<input type="text" name="add_ss" class="form-control" placeholder="Enter Resolution" required>
						</div>
						<div class="form-group">
							<label>IPS:</label>
						<input type="text" name="add_s" class="form-control" placeholder="Enter IPS" required>
						</div>
						<div class="form-group">
							<label>CPU:</label>
						<input type="text" name="add_cpu"class="form-control"  placeholder="Enter CPU" required>
						</div>
						<div class="form-group">
							<label>Storage:</label>
						<input type="text" name="add_storage" class="form-control" placeholder="Enter Storage" required>
						</div>
						<div class="form-group">
							<label>RAM:</label>
						<input type="text" name="add_ram"class="form-control" placeholder="Enter RAM" required>
						</div>
						<div class="form-group">
							<label>Weight:</label>
						<input type="text" name="add_w" class="form-control"  placeholder="Enter Weight" required>
						</div>
						<div class="form-group">
							<label>Price:</label>
						<input type="text" name="add_price" class="form-control" placeholder="Enter Price" required>
						</div>
						<div class="form-group">
							<label>GPU:</label>
						<input type="text" name="add_gpu" class="form-control" placeholder="Enter GPU" required>
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
						<form action="computer-index.php" method="POST"  enctype="multipart/form-data">
						<input type="hidden" name="add_id">
                        <div class="form-group">
							<label> Subcate:</label>
						<input type="text" name="add_sc" class="form-control" placeholder="Enter Subcategory" required>
						</div>
						<div class="form-group">
							<label>Brand :</label>
						<input type="text" name="add_brand" class="form-control" placeholder="Enter Brand" required>
						</div>
						<div class="form-group">
							<label>Image:</label>
						<input type="file" name="add_img" id="add_img" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Name :</label>
						<input type="text" name="add_name" placeholder="Enter Name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Weight:</label>
						<input type="text" name="add_w"  placeholder="Enter Weight" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Price :</label>
						<input type="text" name="add_price"  placeholder="Enter Price" class="form-control" required>
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
    </body>
</html>
