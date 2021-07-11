<?php
include_once( 'inc/connect.php' );
include( 'inc/header.php' );
include( 'inc/left.php' );

if ( isset( $_GET[ 'c' ] ) ) {
  $c = ( int )$_GET[ 'c' ];
  $sqlc = " `product$c` ";
} else {
  $sqlc = " `product1` ";
  $c = 0;
}
if ( isset( $_GET[ 'br' ] ) ) {
  $br = $_GET[ 'br' ];
  $sqlbr = "`brand` LIKE '%$br%' ";

} else {
  $sqlbr = "1";
}
if ( isset( $_GET[ 'sc' ] ) ) {
  $sc = $_GET[ 'sc' ];

  $sqlsc = " and `cpu` LIKE '%$sc%' ";

} else {
  $sqlsc = "";
}
if ( isset( $_GET[ 'pr' ] ) ) {
  $pr = $_GET[ 'pr' ];
  if ( $pr == 500 ) {
    $sqlpr = " and `price`<='$pr' ";
  };
  if ( $pr == 1000 ) {
    $sqlpr = " and `price`<='$pr' and  `price`>=500 ";
  };
  if ( $pr == 2500 ) {
    $sqlpr = " and `price`<='$pr' and  `price`>=1000 ";
  };
  if ( $pr == 2501 ) {
    $sqlpr = " and  `price`>=2051 ";
  };

} else {
  $sqlpr = "";
}
if ( isset( $_GET[ 'sort' ] ) ) {
  $sort = $_GET[ 'sort' ];
  $sqlsort = "  ORDER BY price $sort ";

} else {
  $sqlsort = "";
}

?>
<div name = "content" class="col-9 ">
  <div class="container mt-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <?php if ( isset( $_GET[ 'c' ] ) ) {?>
        <li class="breadcrumb-item"><a href="laptop.php?c=<?php echo $c;?>">
          <?php if ($c==1){ echo "Camera";} if ($c==2){ echo "Computer";}; if ($c==3){ echo "Device";};?>
          </a></li>
        <?php }?>
        <?php if ( (isset( $_GET[ 'br' ]))&&(($c==1)||($c==2)) )  {?>
        <li class="breadcrumb-item"><a href="laptop.php?c=<?php echo $c ;?>&br=<?php echo $br;?>" style="text-transform: capitalize"><?php echo $br?></a></li>
        <?php }?>
        
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
      $sql = "SELECT * FROM $sqlc WHERE  " . $sqlbr . $sqlpr . $sqlsc . $sqlsort  . " ;";


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
            <a href="#" class="btn btn-info">Add to Cart</a> </div>
        </div>
      </div>
      <?php  }}?>
    </div>
  </div>
</div>
<?php
include( 'inc/footer.php' )
?>
