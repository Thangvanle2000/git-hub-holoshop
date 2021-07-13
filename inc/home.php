<div name = "content" class="col-9 ">
	  
		<div class="container mt-3">
			
			
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="dproduct.php?c=2&id=117"><img class="d-block w-100" src="images/banner-computer.jpg" alt="First slide"></a>
                <div class="carousel-caption d-block">
                  <a href="dproduct.php?c=2&id=117"><h5><span>Laptop Asus Lamborghini VX7</span></h5>
                  <p><span>Break All Configurations</span></p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="dproduct.php?c=1&id=29"><img class="d-block w-100" src="images/banner-camera.jpg" alt="Second slide"></a>
                <div class="carousel-caption d-block">
                  <h5>Sony Alpha A7 Kit 28-70mm</h5>
                  <p>Removable Lens</p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="dproduct.php?c=3&id=21" ><img class="d-block w-100" src="images/banner-logitech.jpg" alt="Third slide"></a>
                <div class="carousel-caption d-block">
                  <h5>Logitech gaming headphone</h5>
                  <p>Best Experient</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/free-ship.png"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Free Shipping</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/free-return.png"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Free Returns</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/low-price.png"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Low Prices</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <hr>
    <h2 class="text-center">RECOMMENDED PRODUCTS</h2>
    <hr>
    <div class="container mt-3">
      <div class="grid-container" id="gridcon"
				 style="display: grid;grid-template-columns: 33% 33% 33%;
				  background-color: #EDEDED;
				  padding: 5px;
						grid-gap: 5px;">
        <?php
      $sql = "SELECT * FROM `product2` WHERE 1 LIMIT 6 ;";


      $result = mysqli_query( $con, $sql );

      if ( mysqli_num_rows( $result ) > 0 ) {
        // output data of each row
        while ( $row_product = mysqli_fetch_assoc( $result ) ) {
          ?>
        <div class="grid-item">
          <div class="card"> <a href="dproduct.php?c=2&id=<?php echo $row_product['id']?>" style="    
										width: 100%;
										height: 0;
										padding-bottom: 100%;
										display: flex;
    									align-content: center;								   "> <img class="card-img-top" src="images/<?php echo $row_product['img'] ?>" alt="<?php echo $row_product['name'];?>" style=" display: inline-block;
  margin-bottom: auto ;
  margin-top:  15%;																									
  width: 100%;"> </a>
            <div class="card-body">
              <h5 class="card-title">
                <?php  echo $row_product['name']?>
              </h5>
              <p class="card-text">
              <ul class="detail-text">
                <li> <?php echo "CPU: ".$row_product['cpu']."\n  RAM: ".$row_product['ram']."\n Hard Drive: ".$row_product['storage']."\n VGA: ".$row_product['gpu']."\n Screen:  ".$row_product['ss']." ".$row_product['s']; ?> </li>
              </ul>
              </p>
              <span class="price-product"><?php echo number_format($row_product['price']).'$'?></span><br>
              </div>
          </div>
        </div>
        <?php  }}?>
        </div>
    </div>
	
    
    <hr>
    	<h2 class="text-center">FEARTURED PRODUCT</h2>
    <hr>
    <div class="container mt-3">
      <div class="grid-container" id="gridcon"
				 style="display: grid;grid-template-columns: 33% 33% 33%;
				  background-color: #EDEDED;
				  padding: 5px;
						grid-gap: 5px;">
        <?php
      $sql = "SELECT * FROM `product1` WHERE  1 LIMIT 6;";

		
      $result = mysqli_query( $con, $sql );

      if ( mysqli_num_rows( $result ) > 0 ) {
        // output data of each row
        while ( $row_product = mysqli_fetch_assoc( $result ) ) {
          ?>
        <div class="grid-item">
          <div class="card">
            <a href="dproduct.php?c=2&id=<?php echo $row_product['id']?>" style="    
										width: 100%;
										height: 0;
										padding-bottom: 100%;
										display: flex;
    									align-content: center;								   "> 
            <img class="card-img-top" src="images/<?php echo $row_product['img'] ?>" alt="<?php echo $row_product['name'];?>" style=" display: inline-block;
  margin-bottom: auto ;
  margin-top:  15%;																									
  width: 100%;">
            </a>
            <div class="card-body">
              <h5 class="card-title">
                <?php  echo $row_product['name']?>
              </h5>
              <p class="card-text">
              <ul class="detail-text">
                <li> <?php echo "Max resolusion: ".$row_product['maxreso']." pixel \n  Low resolusion: ".$row_product['lowreso']." pixel \n Weight: ".$row_product['w']."g. \n Zoom wide : ".$row_product['zwide']."mm \n Zoom tele: ".$row_product['ztele'] ?> </li>
              </ul>
              </p>
              <span class="price-product"><?php echo number_format($row_product['pr']).'$'?></span><br>
               </div>
          </div>
        </div>
        <?php  }}?>
		
	<?php
      $sql = "SELECT * FROM `product3` WHERE  1 LIMIT 6 ;";


      $result = mysqli_query( $con, $sql );

      if ( mysqli_num_rows( $result ) > 0 ) {
        // output data of each row
        while ( $row_product = mysqli_fetch_assoc( $result ) ) {
          ?>
      <div class="grid-item">
        <div class="card">
          <a href="dproduct.php?c=3&id=<?php echo $row_product['id']?>" style="    
										width: 100%;
										height: 0;
										padding-bottom: 100%;
										display: flex;
    									align-content: center;								   "> 
          <img class="card-img-top" src="images/<?php echo $row_product['img'] ?>" alt="<?php echo $row_product['name'];?>" style=" display: inline-block;
  margin-bottom: auto ;
  																									
  width: 100%;">
        </a>
          <div class="card-body">
            <h5 class="card-title">
              <?php  echo $row_product['name']?>
            </h5>
            <p class="card-text">
            <ul class="detail-text">
              <li style="text-align:center;"><?php echo " \t         Brand: ".$row_product['br']."\n   \t       Weight: ".$row_product['w']."g  Type : ";  if ($row_product['sc']=='kb'){ echo "KeyBoard";} if ($row_product['sc']=='hp'){ echo "Headphone";}; if ($row_product['sc']=='m'){ echo "Mouse";};?> </li>
            </ul>
            </p>
            <span class="price-product"><?php echo number_format($row_product['pr']).'$'?></span><br>
             </div>
        </div>
      </div>
      <?php  }}?>
        </div>
    </div>
  <hr>
    
 </div>   
</div>
</div>
</div>




    
 
