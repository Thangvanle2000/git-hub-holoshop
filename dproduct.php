<?php
include_once( 'inc/connect.php' );
include( 'inc/header.php' );
include( 'inc/left.php' );
if ( isset( $_GET[ 'name' ] ) ) {
  $name = $_GET[ 'name' ];
  for ( $x = 1; $x <= 3; $x++ ) {
    $sql = "SELECT * FROM `product$x` WHERE 	`name`='$name' LIMIT 1";
    $result = mysqli_query( $con, $sql );
    if ( $result->num_rows != 0 ) {
      $row = mysqli_fetch_assoc( $result );
      $c = $x;
      $id = $row[ 'id' ];

    }
  }


}
if ( isset( $_GET[ 'c' ] ) ) {
  $c = ( int )$_GET[ 'c' ];

}
if ( isset( $_GET[ 'id' ] ) ) {
  $id = ( int )$_GET[ 'id' ];

}
$sql = "SELECT * FROM `product$c` WHERE 	`id`='$id' LIMIT 1";
$result = mysqli_query( $con, $sql );
$row = mysqli_fetch_assoc( $result );

?>
<?php if ($c==1) { ?>

<div name = "content" class="col-9 ">
  <div class="container mt-3">
	  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <?php if ( isset( $_GET[ 'c' ] ) ) {?><li class="breadcrumb-item"><a href="camera.php?c=<?php echo $c;?>"><?php if ($c==1){ echo "Camera";} if ($c==2){ echo "Computer";}; if ($c==3){ echo "Device";};?></a></li><?php }?>
        <li class="breadcrumb-item"><a href="camera.php?c=1&br=<?php $string = $row['name'];
$newString = substr($string, 0, strpos($string, " "));
echo $newString;  ?>" style="text-transform: capitalize"> <?php
$string = $row['name'];
$newString = substr($string, 0, strpos($string, " "));
echo $newString;  ?></a></li>  
		 
		 <li class="breadcrumb-item"><a ><?php echo $row['name']; ?></a></li>
		  
		 
      </ol>
    </nav>
    <h3><?php echo $row['name'];?></h3>
    <div class="row lp-margin-bottom-10">
      <div class="col-lg-5 col-md-12">
        <div class="lp-catalog-header-images"> <a href="#" rel="lightbox[2]" data-fancybox="gallery"><img src="images/<?php echo $row['img'];?>" style="width: 100%" alt=""></a> </div>
        <div class="lp-catalog-slider slick-initialized slick-slider"> </div>
        <ul class="lp-cat-report-date">
          <li class="date">Date Published: 08 Jul 2021</li>
        </ul>
      </div>
      
      <!-- Modal --> 
      
      <!-- Modal -->
      
      <div class="col-lg-7 col-md-12">
        <div class="lp-catalog-header-info">
          <ul class="cat-opti-list">
            <li class="display"><span>Max Resolution:</span> <?php echo $row['maxreso'];?>px</li>
            <li class="display"><span>Low Resolution:</span> <?php echo $row['lowreso'];?>px </li>
            <li class="display"><span>Zoom Tele:</span> <?php echo $row['ztele'];?>mm</li>
            <li class="display"><span>Zoom Wide:</span> <?php echo $row['zwide'];?>mm</li>
            <li class="ram"><span>Type:</span>
              <?php if($row['type']==1){ echo "DSLR";}else{ echo "Film Camera";}?>
            </li>
            <li class="weight"><span>Weight:</span> <?php echo $row['w'];?>g</li>
          </ul>
        </div>
        <button >$<?php echo $row['pr'];?><sup>.00</sup> </button>
        </ul>
      </div>
      
      <!-- end col-md-6 --> 
    </div>
  </div>
</div>
<?php } ?>
<?php if ($c==2) { ?>
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
        <li class="breadcrumb-item"><a href="laptop.php?c=2&br=<?php echo $row['brand']; ?>" style="text-transform: capitalize"><?php echo $row['brand'];  ?></a></li>  
		 
		 <li class="breadcrumb-item"><a ><?php echo $row['name']; ?></a></li>
        
      </ol>
    </nav>
    <h3><?php echo $row['name'];?></h3>
    <div class="row lp-margin-bottom-10">
      <div class="col-lg-5 col-md-12">
        <div class="lp-catalog-header-images"> <a href="#" rel="lightbox[2]" data-fancybox="gallery"><img src="images/<?php echo $row['img'];?>" style="width: 100%" alt=""></a> </div>
        <div class="lp-catalog-slider slick-initialized slick-slider"> </div>
        <ul class="lp-cat-report-date">
          <li class="date">Date Published: 08 Jul 2021</li>
        </ul>
      </div>
      
      <!-- Modal --> 
      
      <!-- Modal -->
      
      <div class="col-lg-7 col-md-12">
        <div class="lp-catalog-header-info">
          <ul class="cat-opti-list">
            <li class="cpu"><span>CPU:</span> <?php echo $row['cpu'];?></li>
            <li class="gpu"><span>GPU:</span> <?php echo $row['gpu'];?> </li>
            <li class="display"><span>Display:</span> <?php echo $row['ss']." ".$row['s'];?> </li>
            <li class="storage"><span>Storage:</span> <?php echo $row['storage'];?></li>
            <li class="ram"><span>RAM:</span> <?php echo $row['ram'];?></li>
            <li class="weight"><span>Weight:</span> <?php echo $row['w'];?>)</li>
          </ul>
        </div>
        <button >$<?php echo $row['price'];?><sup>.00</sup> </button>
        </ul>
      </div>
      
      <!-- end col-md-6 --> 
    </div>
  </div>
</div>
<?php } ?>
<?php if ($c==3) { ?>
<div name = "content" class="col-9 ">
  <div class="container mt-3">
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <?php if ( isset( $_GET[ 'c' ] ) ) {?><li class="breadcrumb-item"><a href="device.php?c=<?php echo $c;?>"><?php if ($c==1){ echo "Camera";} if ($c==2){ echo "Computer";}; if ($c==3){ echo "Device";};?></a></li><?php }?>
        
		<li class="breadcrumb-item"><a href="device.php?c=3&sc=<?php $sc=$row['sc']; echo $sc;?>" style="text-transform: capitalize"><?php if ($sc=='kb'){ echo "KeyBoard";} if ($sc=='hp'){ echo "Headphone";}; if ($sc=='m'){ echo "Mouse";};?></a></li>  
		 
		 <li class="breadcrumb-item"><a ><?php echo $row['name']; ?></a></li> 
      </ol>
    </nav>  
    <h3><?php echo $row['name'];?></h3>
    <div class="row lp-margin-bottom-10">
      <div class="col-lg-5 col-md-12">
        <div class="lp-catalog-header-images"> <a href="#" rel="lightbox[2]" data-fancybox="gallery"><img src="images/<?php echo $row['img'];?>" style="width: 100%" alt=""></a> </div>
        <div class="lp-catalog-slider slick-initialized slick-slider"> </div>
        <ul class="lp-cat-report-date">
          <li class="date">Date Published: 08 Jul 2021</li>
        </ul>
      </div>
      
      <!-- Modal --> 
      
      <!-- Modal -->
      
      <div class="col-lg-7 col-md-12">
        <div class="lp-catalog-header-info">
          <ul class="cat-opti-list">
            <li class="display"><span>Manufacture:</span> <?php echo $row['br'];?></li>
            
            <li class="ram"><span>Type:</span>
              <?php if($row['sc']=="kb"){ echo "Keyboard";} if($row['sc']=="hp"){ echo "Headphone";} if($row['sc']=="m"){ echo "Mouse";}?>
            </li>
            <li class="weight"><span>Weight:</span> <?php echo $row['w'];?>g</li>
          </ul>
        </div>
        <button >$<?php echo $row['pr'];?><sup>.00</sup> </button>
        </ul>
      </div>
      
      <!-- end col-md-6 --> 
    </div>
  </div>
</div>
<?php } ?>
<?php
include( 'inc/footer.php' )
?>