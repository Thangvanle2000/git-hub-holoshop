<?php
if ( isset( $_GET[ 'c' ] ) ) {
  $c = ( int )$_GET[ 'c' ];
} else {
  $c = 0;
}

switch ( $c ) {
  case 1:
    ?>
<form action="camera.php" method="GET">
  <input value="1" name="c" type="hidden">
  <div class="input-group mb-3">
    <div class="input-group-prepend"> </div>
    <?php if (isset($_GET['br'])) { $BR = $_GET['br']; } else {$BR="";} ?>
    <select class="custom-select" id="brand" name ="br">
      <option disabled selected>Brand</option>
      <option <?php if($BR=='sony'){ echo "selected"; } ?> value="sony">SONY</option>
      <option <?php if($BR=='canon'){ echo "selected"; } ?> value="canon">CANON</option>
      <option <?php if($BR=='fujifilm'){ echo "selected"; } ?> value="fujifilm">FUJIFILM</option>
      <option <?php if($BR=='kodak'){ echo "selected"; } ?> value="kodak">KODAK</option>
      <option <?php if($BR=='nikon'){ echo "selected"; } ?> value="nikon">Nikon</option>
      <option <?php if($BR=='leica'){ echo "selected"; } ?> value="leica">Leica</option>
    </select>
    <?php if (isset($_GET['pr'])) { $PR = $_GET['pr']; } else {$PR="";} ?>
    <select class="custom-select" id="price" name = "pr">
      <option disabled selected>Price range</option>
      <option <?php if($PR=='500'){ echo "selected"; } ?> value="500">&lt;$500</option>
      <option <?php if($PR=='1000'){ echo "selected"; } ?> value="1000">$500-&gt;$1000</option>
      <option <?php if($PR=='2500'){ echo "selected"; } ?> value="2500">$1000-&gt;$2500</option>
      <option <?php if($PR=='2501'){ echo "selected"; } ?> value="2501">&gt;2500</option>
    </select>
    <?php if (isset($_GET['sc'])) { $SC = $_GET['sc']; } else {$SC="";} ?>
    <select class="custom-select" id="cpu" name="sc">
      <option disabled selected>Type of Camera</option>
      <option <?php if($SC=='film'){ echo "selected"; } ?> value="2">Film Camera</option>
      <option <?php if($SC=='dslr'){ echo "selected"; } ?> value="1">DSLR</option>
    </select>
    <?php if (isset($_GET['sort'])) { $S = $_GET['sort']; } else {$S="";} ?>
    <select class="custom-select" id="sort" name="sort">
      <option disabled selected>Sort</option>
      <option <?php if($S=='ASC'){ echo "selected"; } ?> value="ASC">By price: Low to High</option>
      <option <?php if($S=='DESC'){ echo "selected"; } ?> value="DESC">By price: High to Low</option>
    </select>
    <button class="btn btn-outline-secondary" type="submit">Search</button>
  </div>
</form>
<?php
break;
case 2:
  ?>
<form action="laptop.php" method="GET">
  <input value="2" name="c" type="hidden">
  <div class="input-group mb-3">
    <div class="input-group-prepend"> </div>
    <?php if (isset($_GET['br'])) { $BR = $_GET['br']; } else {$BR="";} ?>
    <select class="custom-select" id="brand" name ="br">
      <option disabled selected>Brand</option>
      <option <?php if($BR=='macbook'){ echo "selected"; } ?> value="apple">Apple</option>
      <option <?php if($BR=='acer'){ echo "selected"; } ?> value="acer">Acer</option>
      <option <?php if($BR=='asus'){ echo "selected"; } ?> value="asus">ASUS</option>
      <option <?php if($BR=='dell'){ echo "selected"; } ?> value="dell">DELL</option>
      <option <?php if($BR=='hp'){ echo "selected"; } ?> value="hp">HP</option>
    </select>
    <?php if (isset($_GET['pr'])) { $PR = $_GET['pr']; } else {$PR="";} ?>
    <select class="custom-select" id="price" name = "pr">
      <option disabled selected>Price range</option>
      <option <?php if($PR=='500'){ echo "selected"; } ?> value="500">&lt;$500</option>
      <option <?php if($PR=='1000'){ echo "selected"; } ?> value="1000">$500-&gt;$1000</option>
      <option <?php if($PR=='2500'){ echo "selected"; } ?> value="2500">$1000-&gt;$2500</option>
      <option <?php if($PR=='2501'){ echo "selected"; } ?> value="2501">&gt;2500</option>
    </select>
    <?php if (isset($_GET['sc'])) { $SC = $_GET['sc']; } else {$SC="";} ?>
    <select class="custom-select" id="cpu" name="sc">
      <option disabled selected>CPU</option>
      <option <?php if($SC=='i5'){ echo "selected"; } ?> value="i5">i5</option>
      <option <?php if($SC=='i7'){ echo "selected"; } ?> value="i7">i7</option>
      <option <?php if($SC=='M1'){ echo "selected"; } ?> value="M1">M1</option>
      <option <?php if($SC=='AMD'){ echo "selected"; } ?> value="AMD">AMD</option>
    </select>
    <?php if (isset($_GET['sort'])) { $S = $_GET['sort']; } else {$S="";} ?>
    <select class="custom-select" id="sort" name="sort">
      <option disabled selected>Sort</option>
      <option <?php if($S=='ASC'){ echo "selected"; } ?> value="ASC">By price: Low to High</option>
      <option <?php if($S=='DESC'){ echo "selected"; } ?> value="DESC">By price: High to Low</option>
    </select>
    <button class="btn btn-outline-secondary"  type="submit">Search</button>
  </div>
</form>
<?php
break;


case 3:
  ?>
<form action="device.php" method="GET">
  <input value="3" name="c" type="hidden">
  <div class="input-group mb-3">
    <div class="input-group-prepend"> </div>
    <?php if (isset($_GET['br'])) { $BR = $_GET['br']; } else {$BR="";} ?>
    <select class="custom-select" id="brand" name ="br">
      <option disabled selected>Brand</option>
      <option <?php if($BR=='ss'){ echo "selected"; } ?> value="ss">SteelSeries</option>
      <option <?php if($BR=='sakura'){ echo "selected"; } ?> value="sakura">Sakura</option>
      <option <?php if($BR=='akko'){ echo "selected"; } ?> value="akko">AKKO</option>
    </select>
    <?php if (isset($_GET['pr'])) { $PR = $_GET['pr']; } else {$PR="";} ?>
    <select class="custom-select" id="price" name = "pr">
      <option disabled selected>Price range</option>
      <option <?php if($PR=='500'){ echo "selected"; } ?> value="500">&lt;$500</option>
      <option <?php if($PR=='1000'){ echo "selected"; } ?> value="1000">$500-&gt;$1000</option>
      <option <?php if($PR=='2500'){ echo "selected"; } ?> value="2500">$1000-&gt;$2500</option>
      <option <?php if($PR=='2501'){ echo "selected"; } ?> value="2501">&gt;2500</option>
    </select>
    <?php if (isset($_GET['sc'])) { $SC = $_GET['sc']; } else {$SC="";} ?>
    <select class="custom-select" id="cpu" name="sc">
      <option disabled selected>Type of Device</option>
      <option <?php if($SC=='kb'){ echo "selected"; } ?> value="kb">Keyboard</option>
      <option  <?php if($SC=='hp'){ echo "selected"; } ?> value="hp">Headphone</option>
      <option  <?php if($SC=='m'){ echo "selected"; } ?>  value="m">Mouse</option>
    </select>
    <?php if (isset($_GET['sort'])) { $S = $_GET['sort']; } else {$S="";} ?>
    <select class="custom-select" id="sort" name="sort">
      <option disabled selected>Sort</option>
      <option <?php if($S=='ASC'){ echo "selected"; } ?> value="ASC">By price: Low to High</option>
      <option <?php if($S=='DESC'){ echo "selected"; } ?> value="DESC">By price: High to Low</option>
    </select>
    <button class="btn btn-outline-secondary"  type="submit">Search<br>
    </button>
  </div>
</form>
<?php

break;
case 0:
  ?>
<form action="product.php" method="GET">
  <div class="input-group mb-3">
    <div class="input-group-prepend"> </div>
    <?php if (isset($_GET['pr'])) { $PR = $_GET['pr']; } else {$PR="";} ?>
    <select class="custom-select" id="price" name = "pr">
      <option disabled selected>Price range</option>
      <option <?php if($PR=='500'){ echo "selected"; } ?> value="500">&lt;$500</option>
      <option <?php if($PR=='1000'){ echo "selected"; } ?> value="1000">$500-&gt;$1000</option>
      <option <?php if($PR=='2500'){ echo "selected"; } ?> value="2500">$1000-&gt;$2500</option>
    </select>
    <?php if (isset($_GET['sort'])) { $S = $_GET['sort']; } else {$S="";} ?>
    <select class="custom-select" id="sort" name="sort">
      <option disabled selected>Sort</option>
      <option <?php if($S=='ASC'){ echo "selected"; } ?> value="ASC">By price: Low to High</option>
      <option <?php if($S=='DESC'){ echo "selected"; } ?> value="DESC">By price: High to Low</option>
    </select>
    <button class="btn btn-outline-secondary"  type="submit">Search</button>
  </div>
</form>
<?php
break;
}
?>
