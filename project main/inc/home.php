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
                <img class="d-block w-100" src="images/banner-computer.jpg" alt="First slide">
                <div class="carousel-caption d-block">
                  <h5><span>Laptop Asus Lamborghini VX7</span></h5>
                  <p><span>Break All Configurations</span></p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/banner-camera.jpg" alt="Second slide">
                <div class="carousel-caption d-block">
                  <h5>Sony Alpha A7 Kit 28-70mm</h5>
                  <p>Removable Lens</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/banner-combo.jpg" alt="Third slide">
                <div class="carousel-caption d-block">
                  <h5>Rampage MEEPO PLUS Combo</h5>
                  <p>Best Price</p>
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
	<?php $sql_cate_home = mysqli_query($con,'SELECT *FROM btl_category ORDER BY category_id DESC');
	while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
		$id_category = $row_cate_home['category_id'];  
	?>
    <div class="container">
      <div class="row text-center">
		  <?php 
		  $sql_product = mysqli_query($con,'SELECT *FROM btl_product ORDER BY product_id DESC');
		  while($row_product = mysqli_fetch_array($sql_product)){
			if($row_product['category_id']==$id_category && $row_product['product_active']==1){  
		  ?>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/<?php echo $row_product['product_image'] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row_product['product_name'] ?></h5>
              <p class="card-text"><?php echo $row_product['product_caption']?></p>
			  <span class="price-product"><?php echo number_format($row_product['product_price']).'$'?></span><br>
              <a href="productdetail.php?id=<?php echo $row_product['product_id'] ?>" class="btn btn-info">Add to Cart</a>
            </div>
          </div>
        </div>
        <?php } } ?>
       
     
      </div>
	  	<?php } ?>
    </div>
    <hr>
    <h2 class="text-center">FEATURED PRODUCTS</h2>
    <hr>
	<?php $sql_cate_home = mysqli_query($con,'SELECT *FROM btl_category ORDER BY category_id DESC');
	while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
		$id_category = $row_cate_home['category_id'];  
	?>
    <div class="container">
      <div class="row">
	  <?php 
		  $sql_product = mysqli_query($con,'SELECT *FROM btl_product ORDER BY product_id DESC');
		  while($row_product = mysqli_fetch_array($sql_product)){
			if($row_product['category_id']==$id_category && $row_product['product_active']==2){  
		  ?>
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3" src="images/<?php echo $row_product['product_image'] ?>" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1"><?php echo $row_product['product_name'] ?></h5>
                <?php  echo $row_product['product_caption']?>
              </div>
            </li>
          
          </ul>
        </div>
		<?php } } ?>
     
        </div>
      </div>
	  <?php } ?>
	<hr>
    
    
</div>





    
 
