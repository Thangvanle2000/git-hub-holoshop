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
						<?php require_once('admin-index.php');
						?>
						<?php 
						$con = new mysqli('localhost','root','','btl');
						$result =$con->query("SELECT * FROM btl_user");
						?>
						<div class="add-user" style="width: 20%;">
						<h5>Add User</h5>
						<form action="admin-index.php" method="POST">
                        <div class="form-group">
							<label> Username:</label>
						<input type="text" name="add_username" placeholder="Enter Username" class="form-control">
						</div>
						<div class="form-group">
							<label> Role</label>
						<select name="add_role" style="margin-top: 10px; width: 100px;height: 30px;">
							<option value="user">User</option>
							<option value="admin">Admin</option>
						</select>
						</div>
						<div class="form-group">
							<label> Password:</label>
						<input type="text" name="add_password" placeholder="Enter Password" class="form-control">
						</div>
						<div class="form-group">
							<label> Name:</label>
						<input type="text" name="add_name" placeholder="Enter Name" class="form-control">
						</div>
						<a href="user.php" class="btn btn-danger">Cancel</a>
						<button type="submit" class="btn btn-primary" name="save_user">Add User</button>
						</form>
						</div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
