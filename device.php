<?php
include_once( 'inc/connect.php' );
include( 'inc/header.php' );
include( 'inc/left.php' );

if ( isset( $_GET[ 'c' ] ) ) {
  $c = ( int )$_GET[ 'c' ];
  $sqlc = " `product$c` ";
} else {
  $sqlc = " `product1` ";
	$c=0;
}
if ( isset( $_GET[ 'br' ] ) ) {
  $br = $_GET[ 'br' ];
  $sqlbr = "`br` LIKE '%$br%' ";

} else {
  $sqlbr = "1";
}
if ( isset( $_GET[ 'sc' ] ) ) {
  $sc = $_GET[ 'sc' ];

  $sqlsc = " and `sc` LIKE '%$sc%' ";

} else {
  $sqlsc = "";
}
if ( isset( $_GET[ 'pr' ] ) ) {
  $pr = $_GET[ 'pr' ];
  if($pr==100){$sqlpr = " and `pr`<='$pr' ";};
  
  if($pr==200){$sqlpr = " and `pr`<='$pr' and  `pr`>=100 ";};
  if($pr==201){$sqlpr = " and  `pr`>=200 ";};

} else {
  $sqlpr = "";
}
if ( isset( $_GET[ 'sort' ] ) ) {
  $sort = $_GET[ 'sort' ];
  $sqlsort = "  ORDER BY pr $sort ";

} else {
  $sqlsort = "";
}

?>
<div name = "content" class="col-9 ">
  <div class="container mt-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <?php if ( isset( $_GET[ 'c' ] ) ) {?><li class="breadcrumb-item"><a href="device.php?c=<?php echo $c;?>"><?php if ($c==1){ echo "Camera";} if ($c==2){ echo "Computer";}; if ($c==3){ echo "Device";};?></a></li><?php }?>
        
		<?php if ( (isset( $_GET[ 'sc' ]))&&($c==3 ))  {?><li class="breadcrumb-item"><a href="device.php?br=<?php echo $br;?>" style="text-transform: capitalize"><?php if ($sc=='kb'){ echo "KeyBoard";} if ($sc=='hp'){ echo "Headphone";}; if ($sc=='m'){ echo "Mouse";};?></a></li><?php }?>  
		 
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
      $sql = "SELECT * FROM $sqlc WHERE  ".$sqlbr.$sqlpr.$sqlsc.$sqlsort." ;";


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
