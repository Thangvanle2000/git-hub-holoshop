<div class="row">
  <div name ="left" id="left" class="col-2 text-center ml-3" >
	  
	  			<a target="_blank" href="https://genshin.mihoyo.com/en/download">
					<img class="w-100 h-auto mt-xl-2 rounded" src="images/Ad-0.jpg" alt=""></a>
				<a target="_blank" href="https://genshin.mihoyo.com/en/character/mondstadt?char=8">
					<img class=" w-100 h-auto mt-xl-5 rounded" src="images/Ad-1.jpg" alt=""></a>
				<a target="_blank" href="https://genshin.mihoyo.com/en/character/mondstadt?char=17">
					<img class="w-100 h-auto mt-xl-5 rounded" src="images/Ad-2.png" alt=""></a>
		  		<a target="_blank" href="https://genshin.mihoyo.com/en/character/mondstadt?char=11">
					<img class="w-100 h-auto mt-xl-5 rounded" src="images/Ad-3.jpg" alt=""></a>
		  		<a target="_blank" href="https://genshin.mihoyo.com/en/character/mondstadt?char=14">
					<img class="w-100 h-auto mt-xl-5 rounded" src="images/Ad-4.png" alt=""></a>
			
	  </div>
	  <div name = "content" class="col-9 ">
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
    </div>
    <hr>
</div>

	  