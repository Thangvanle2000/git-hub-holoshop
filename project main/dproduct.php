<?php
include_once( 'inc/connect.php' );
include( 'inc/header.php' );
include( 'inc/left.php' );

if ( isset( $_GET[ 'id' ] ) ) {
  $id = ( int )$_GET[ 'id' ];
  $sqlc = " `product_id` = '$id' ";
} else {
  $sqlc = "1";
}
?>
<div name = "content" class="col-9 ">
  <div class="container mt-3">
   
	 <h3>Acer Helios 300</h3> 
    <div class="row lp-margin-bottom-10">
      <div class="col-lg-5 col-md-12">
        <div class="lp-catalog-header-images"> <a href="#" rel="lightbox[2]" data-fancybox="gallery"><img src="images/acer-helios300.png" style="width: 100%" alt=""></a> </div>
        <div class="lp-catalog-slider slick-initialized slick-slider">
          <button type="button" data-role="none" class="slick-prev slick-arrow slick-disabled" aria-label="Previous" role="button" aria-disabled="true" style="">Previous</button>
          <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="" aria-disabled="false">Next</button>
        </div>
        <ul class="lp-cat-report-date">
          <li class="date">Date Published: 08 Jul 2021</li>
          <li class="report"><a href="#" data-toggle="modal" data-target="#report_mistake">Report a mistake</a></li>
        </ul>
      </div>
      
      <!-- Modal --> 
      
      <!-- Modal -->
      
      <div class="col-lg-7 col-md-12">
        <div class="lp-catalog-header-info">
          <ul class="cat-opti-list">
            <li class="cpu"><span>CPU:</span> Intel Core i7-10750H</li>
            <li class="gpu"><span>GPU:</span> NVIDIA GeForce RTX 2060 (Laptop, 80W) </li>
            <li class="display"><span>Display:</span> 17.3”, Full HD (1920 x 1080), 144 Hz, IPS </li>
            <li class="storage"><span>Storage:</span> 512GB SSD + 1000GB HDD</li>
            <li class="ram"><span>RAM:</span> 64GB DDR4</li>
            <li class="weight"><span>Weight:</span> 2.90 kg (6.4 lbs)</li>
          </ul>
        </div>
        <div class="lp-catalog-header-buttons lp-one-col">
          <ul class="catalog-buttons">
            <li><a href="https://www.amazon.com/exec/obidos/ASIN/B0924KMQHG?tag=specslaptops-20" class="catalog-button-orange catalog-button-amazon" target="_blank" data-amzn-asin="B0924KMQHG">$2069<sup>.00</sup> <span><em class="smlctxt">#CommissionsEarned</em></span></a></li>
          </ul>
        </div>
      </div>
      <!-- end col-md-6 --> 
    </div>
  </div>
</div>
<?php
include( 'inc/footer.php' )
?>