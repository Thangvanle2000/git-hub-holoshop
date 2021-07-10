<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOLOSHOP</title>
	  <link rel="icon" href="images/favicon.png" type="image/x-icon"/>
    <!-- Bootstrap -->
		<link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="css/custom.css"  rel="stylesheet"> 
	<link href="css/eCommerceStyle.css" rel="stylesheet">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
		
  </head>
<body>
<div name="header-LOGO" style ="height: 100px; width: 100%">
  <div id ="logo"><a href="index.php" ><img src="images/main logo.png" alt="sample logo" ></a></div>
  <div id ="headerLinks"><a href="Login-Register.php" title="Register-login">Register/Login</a><a href="#" title="Cart">Cart</a></div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
			
            <li class="nav-item dropdown">
				<a href="product.php?c=2" >
					  <a class="nav-link dropdown-toggle" onclick="location.href='laptop.php?c=2';"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Computer</a>
					  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="laptop.php?c=2&br=asus">ASUS</a>
						<a class="dropdown-item" href="laptop.php?c=2&br=macbook">Macbook</a>
						<a class="dropdown-item" href="laptop.php?c=2&br=dell">DELL</a>
						<a class="dropdown-item" href="laptop.php?c=2&br=hp">HP</a>
						<a class="dropdown-item" href="laptop.php?c=2&br=acer">Acer</a>
						  <a class="dropdown-item" href="laptop.php?c=2&br=lenovo">LENOVO</a>
				 
				  
              </div>
				</a>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"  onclick="location.href='camera.php?c=1';" href="product.php?c=1" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Camera&nbsp;</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="camera.php?c=1&br=sony">Sony</a>
				  <a class="dropdown-item" href="camera.php?c=1&br=kodak">Kodak</a>
				  <a class="dropdown-item" href="camera.php?c=1&br=canon">Canon</a>
 				  <a class="dropdown-item" href="camera.php?c=1&br=fujifilm">Fujifilm</a>
				  <a class="dropdown-item" href="camera.php?c=1&br=nikon" >Nikon</a>
				  <a class="dropdown-item" href="camera.php?c=1&br=leica" >Leica</a>
			  </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"  onclick="location.href='device.php?c=3';" href="product.php?c=3" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Device&nbsp;</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="device.php?c=3&sc=hp">Headphone</a>
				  <a class="dropdown-item" href="device.php?c=3&sc=kb">Keyboard</a>
                  <a class="dropdown-item" href="device.php?c=3&sc=m">Mouse</a></div>
            </li>
            
            <li class="nav-item"> <a class="nav-link" href="index.php?page=aboutus">About us</a></li>
			  
          </ul>
          <form class="form-inline my-2 my-lg-0" action="dproduct.php" method="get">
			<input list="productlist" name="name" id="browser" style="width: 300px">

					<datalist id="productlist">
						<?php
						  $sql = "SELECT * FROM `product` WHERE 1 GROUP BY `name` ";


						  $result = mysqli_query( $con, $sql );

						  if ( mysqli_num_rows( $result ) > 0 ) {
							// output data of each row
							while ( $row_product = mysqli_fetch_assoc( $result ) ) {
							  ?>
					  <option value="<?php echo $row_product['name']; ?>"></option>
					  			<?php }}?>
					</datalist>
            
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>