<?php
include_once( 'db/connect.php' );
include( 'inc/topbar.php' );
include( 'inc/menu.php' );
include( 'inc/left.php' )
?>
<div name = "content" class="col-9 ">
  <div class="container mt-3"> </div>
  <div class="container-product">
    <div class="title-product">
      <ul class="list-title">
        <li> <a href="test.html" class="item-list">Home</a> </li>
        <li> <a href="#" class="item-list">Computer</a> </li>
        <li> <a href="acer.html" class="item-list">Laptop Acer</a> </li>
      </ul>
    </div>
    <div class="current-product">
      <h2 >Laptop Acer</h2>
      <span >(Currently 3 products)</span> </div>
    
    <?php
    $sql_cate_home = mysqli_query( $con, 'SELECT *FROM btl_category ORDER BY category_id DESC' );
    while ( $row_cate_home = mysqli_fetch_array( $sql_cate_home ) ) {
      $id_category = $row_cate_home[ 'category_id' ];
      ?>
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
        <?php
        $count = 0;
        echo "<table><tr>";
        $sql_product = mysqli_query( $con, 'SELECT *FROM btl_product ORDER BY product_id DESC' );
        while ( $row_product = mysqli_fetch_array( $sql_product ) ) {
          if ( $row_product[ 'category_id' ] == $id_category && $row_product[ 'product_type' ] == 'acer' ) {
            ?>
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
            <a href="#" class="btn btn-info">Add to Cart</a> 
		  </div>
        </div>
        
      </div>
    </div>
  </div>
 </div> 
</div>
<?php
include( 'inc/footer.php' )
?>
