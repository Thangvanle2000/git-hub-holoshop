<?php
include_once( 'inc/connect.php' );
include( 'inc/header.php' );
include( 'inc/left.php' );
if ( isset( $_GET[ 'c' ] ) ) {
  $c = ( int )$_GET[ 'c' ];
  
}
if ( isset( $_GET[ 'id' ] ) ) {
  $id = ( int )$_GET[ 'id' ];
  
} 
$sql = "SELECT * FROM `product$c` WHERE 	`id`='$id' LIMIT 1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

?>
<?php if ($c==1) { ?>
<div name = "content" class="col-9 ">
  <div class="container mt-3">
   
	 <h3><?php echo $row['name'];?></h3> 
    <div class="row lp-margin-bottom-10">
      <div class="col-lg-5 col-md-12">
        <div class="lp-catalog-header-images"> <a href="#" rel="lightbox[2]" data-fancybox="gallery"><img src="images/<?php echo $row['img'];?>" style="width: 100%" alt=""></a> </div>
        <div class="lp-catalog-slider slick-initialized slick-slider">
          
        </div>
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
            <li class="ram"><span>Type:</span> <?php if($row['type']==1){ echo "DSLR";}else{ echo "Film Camera";}?></li>
            <li class="weight"><span>Weight:</span> <?php echo $row['w'];?>g</li>
          </ul>
        </div>
        <button >$<?php echo $row['pr'];?><sup>.00</sup> </button></ul>
        </div>
      
      <!-- end col-md-6 --> 
    </div>
  </div>
</div><?php } ?>
<?php if ($c==2) { ?>
<div name = "content" class="col-9 ">
  <div class="container mt-3">
   
	 <h3><?php echo $row['name'];?></h3> 
    <div class="row lp-margin-bottom-10">
      <div class="col-lg-5 col-md-12">
        <div class="lp-catalog-header-images"> <a href="#" rel="lightbox[2]" data-fancybox="gallery"><img src="images/<?php echo $row['img'];?>" style="width: 100%" alt=""></a> </div>
        <div class="lp-catalog-slider slick-initialized slick-slider">
          
        </div>
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
        <button >$<?php echo $row['price'];?><sup>.00</sup> </button></ul>
        </div>
      
      <!-- end col-md-6 --> 
    </div>
  </div>
</div><?php } ?>
<?php
include( 'inc/footer.php' )
?>