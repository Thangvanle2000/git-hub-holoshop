<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOLOSHOP</title>
	  <link rel="icon" href="images/favicon.png" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="css/custom.css"  rel="stylesheet"> 
	<link href="css/eCommerceStyle.css" rel="stylesheet">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  </head>
  <body>
	  <div name="header-LOGO" style ="height: 100px; width: 100%">
		  	<div id ="logo">
				<a href="test.html" > <img src="images/main logo.png" alt="sample logo" ></a>
		  	</div>
	  		<div id ="headerLinks">
				
                <a href="Login-Register.php" title="Register-login">Register/Login</a>
				<a href="#" title="Cart">Cart</a></div>
					</div>
					<?php 
			        $sql_category = mysqli_query($con,'SELECT * FROM  btl_category ORDER BY category_id DESC');
		           ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>