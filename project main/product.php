<?php
include_once( 'inc/connect.php' );
include( 'inc/header.php' );
include( 'inc/left.php' );
?>
<div name = "content" class="col-9 ">
  <div class="container mt-3">
    <form>
      <div class="input-group mb-3">
        <div class="input-group-prepend"> </div>
        <select class="custom-select" id="brand" name ="brand">
          <option disabled selected>Brand</option>
          <option value="1">Apple</option>
          <option value="2">Acer</option>
          <option value="3">ASUS</option>
        </select>
        <select class="custom-select" id="price" name = "price">
          <option disabled selected>Price range</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <select class="custom-select" id="cpu" name="cpu">
          <option disabled selected>CPU</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <select class="custom-select" id="sort" name="sort">
          <option disabled selected>Sort</option>
          <option value="1">By price: Low to High</option>
          <option value="2">By price: High to Low</option>
        </select>
        <button class="btn btn-outline-secondary" type="button">Button</button>
      </div>
    </form>
    <div class="grid-container" id="gridcon"
				 style="display: grid;grid-template-columns: 33% 33% 33%;
				  background-color: #EDEDED;
				  padding: 5px;
						grid-gap: 5px;">
      <?php
      $sql = "SELECT * FROM `btl_product` WHERE `category_id` = '3'";
      $result = mysqli_query( $con, $sql );

      if ( mysqli_num_rows( $result ) > 0 ) {
        // output data of each row
        while ( $row_product = mysqli_fetch_assoc( $result ) ) {
          ?>
      <div class="grid-item">
        <div class="card"> <img class="card-img-top" src="images/<?php echo $row_product['product_image'] ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <?php  echo $row_product['product_name']?>
            </h5>
            <p class="card-text">
            <ul class="detail-text">
              <li> <?php echo $row_product['product_detail'] ?> </li>
            </ul>
            </p>
            <span class="price-product"><?php echo number_format($row_product['product_price']).'$'?></span><br>
            <a href="#" class="btn btn-info">Add to Cart</a> </div>
        </div>
      </div>
      <?php  }}?>
      
     
    </div>

  </div>
</div>

<?php 
   include('inc/footer.php') 
   ?>
