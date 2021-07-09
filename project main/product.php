<?php
include_once( 'inc/connect.php' );
include( 'inc/header.php' );
include( 'inc/left.php' );

if ( isset( $_GET[ 'c' ] ) ) {
  $c = ( int )$_GET[ 'c' ];
  $sqlc = " `category_id` = '$c' ";
} else {
  $sqlc = "1";
	$c=0;
}
if ( isset( $_GET[ 'br' ] ) ) {
  $br = $_GET[ 'br' ];
  $sqlbr = " and `product_type`='$br' ";

} else {
  $sqlbr = "";
}
if ( isset( $_GET[ 'sc' ] ) ) {
  $sc = $_GET[ 'sc' ];

  $sqlsc = " and `sub_cataloge`='$sc' ";

} else {
  $sqlsc = "";
}
if ( isset( $_GET[ 'pr' ] ) ) {
  $pr = $_GET[ 'pr' ];
  $sqlpr = " and `product_price`<='$pr' ";
} else {
  $sqlpr = "";
}
if ( isset( $_GET[ 'sort' ] ) ) {
  $sort = $_GET[ 'sort' ];
  $sqlsort = "  ORDER BY product_price $sort ";

} else {
  $sqlsort = "";
}

?>
<div name = "content" class="col-9 ">
  <div class="container mt-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <?php if ( isset( $_GET[ 'c' ] ) ) {?><li class="breadcrumb-item"><a href="product.php?c=<?php echo $c;?>"><?php if ($c==1){ echo "Camera";} if ($c==2){ echo "Computer";}; if ($c==3){ echo "Device";};?></a></li><?php }?>
        <?php if ( (isset( $_GET[ 'br' ]))&&(($c==1)||($c==2)) )  {?><li class="breadcrumb-item"><a href="product.php?c=<?php echo $c ;?>&br=<?php echo $br;?>" style="text-transform: capitalize"><?php echo $br?></a></li><?php }?>
		<?php if ( (isset( $_GET[ 'sc' ]))&&($c==3 ))  {?><li class="breadcrumb-item"><a href="product.php?br=<?php echo $br;?>" style="text-transform: capitalize"><?php if ($sc=='kb'){ echo "KeyBoard";} if ($sc=='hp'){ echo "Headphone";}; if ($sc=='m'){ echo "Mouse";};?></a></li><?php }?>  
		 
      </ol>
    </nav>
    <?php
    include( 'inc/facet.php' );
    ?>
    <div class="grid-container" id="gridcon"
				 style="display: grid;grid-template-columns: 33% 33% 33%;
				  background-color: #EDEDED;
				  padding: 5px;
						grid-gap: 5px;">
      <?php
      $sql = "SELECT * FROM `btl_product` WHERE " . $sqlc . $sqlbr . $sqlpr . $sqlsc . $sqlsort . " ;";


      $result = mysqli_query( $con, $sql );

      if ( mysqli_num_rows( $result ) > 0 ) {
        // output data of each row
        while ( $row_product = mysqli_fetch_assoc( $result ) ) {
          ?>
      <div class="grid-item">
        <div class="card"><a href="dproduct.php?id=<?php echo $row_product['product_id']?>"> <img class="card-img-top" src="images/<?php echo $row_product['product_image'] ?>" alt="Card image cap"></a>
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
