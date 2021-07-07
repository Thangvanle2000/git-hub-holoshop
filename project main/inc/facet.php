<?php
if ( isset( $_GET[ 'c' ] ) ) {
  $c = ( int )$_GET[ 'c' ];
} else {
  $c = 0;
}

switch ( $c ) {
  case 1:
    ?>
<form action="http://localhost:8080/php/git-hub-holoshop/project%20main/product.php" method="GET">
  <div class="input-group mb-3">
    <div class="input-group-prepend"> </div>
    <select class="custom-select" id="brand" name ="br">
      <option disabled selected>Brand</option>
      <option value="canon">CANON</option>
      
      <option value="fujifilm">FUJIFILM</option>
      <option value="kodak">KODAK</option>
    </select>
    <select class="custom-select" id="price" name = "pr">
      <option disabled selected>Price range</option>
      <option value="500">&lt;$500</option>
      <option value="1000">$500-&gt;$1000</option>
      <option value="2500">$1000-&gt;$2500</option>
    </select>
    <select class="custom-select" id="cpu" name="sc">
      <option disabled selected>Type of Camera</option>
      <option value="film">Film Camera</option>
      <option value="drsl">DRSL</option>
      
      
    </select>
    <select class="custom-select" id="sort" name="sort">
      <option disabled selected>Sort</option>
      <option value="ASC">By price: Low to High</option>
      <option value="DESC">By price: High to Low</option>
    </select>
    <button class="btn btn-outline-secondary" type="submit">Search</button>
  </div>
</form>
<?php
break;
case 2:
  ?>
<form action="http://localhost:8080/php/git-hub-holoshop/project%20main/product.php" method="GET">
  <div class="input-group mb-3">
    <div class="input-group-prepend"> </div>
    <select class="custom-select" id="brand" name ="br">
      <option disabled selected>Brand</option>
      <option value="macbook">Apple</option>
      <option value="acer">Acer</option>
      <option value="asus">ASUS</option>
		<option value="dell">DELL</option>
		<option value="hp">HP</option>
    </select>
    <select class="custom-select" id="price" name = "pr">
      <option disabled selected>Price range</option>
      <option value="500">&lt;$500</option>
      <option value="1000">$500-&gt;$1000</option>
      <option value="2500">$1000-&gt;$2500</option>
    </select>
    <select class="custom-select" id="cpu" name="sc">
      <option disabled selected>CPU</option>
      <option value="i5">i5</option>
      <option value="i7">i7</option>
      <option value="i9">i9</option>
      <option value="m1">M1</option>
      <option value="r7">Ryzen R7</option>
    </select>
    <select class="custom-select" id="sort" name="sort">
      <option disabled selected>Sort</option>
      <option value="ASC">By price: Low to High</option>
      <option value="DESC">By price: High to Low</option>
    </select>
    <button class="btn btn-outline-secondary"  type="submit">Search</button>
  </div>
</form>
<?php
break;


case 3:
  ?>
<form action="http://localhost:8080/php/git-hub-holoshop/project%20main/product.php" method="GET">
  <div class="input-group mb-3">
    <div class="input-group-prepend"> </div>
    <select class="custom-select" id="brand" name ="br">
      <option disabled selected>Brand</option>
      <option value="ss">SteelSeries</option>
      <option value="sakura">Sakura</option>
      <option value="akko">AKKO</option>
    </select>
    <select class="custom-select" id="price" name = "pr">
      <option disabled selected>Price range</option>
      <option value="500">&lt;$500</option>
      <option value="1000">$500-&gt;$1000</option>
      <option value="2500">$1000-&gt;$2500</option>
    </select>
    <select class="custom-select" id="cpu" name="sc">
      <option disabled selected>Type of Device</option>
      <option value="kb">Keyboard</option>
      <option value="hp">Headphone</option>
      <option value="m">Mouse</option>
      
    </select>
    <select class="custom-select" id="sort" name="sort">
      <option disabled selected>Sort</option>
      <option value="ASC">By price: Low to High</option>
      <option value="DESC">By price: High to Low</option>
    </select>
    <button class="btn btn-outline-secondary"  type="submit">Search<br>
    </button>
  </div>
</form>
<?php

break;
case 0:?>
	<form action="http://localhost:8080/php/git-hub-holoshop/project%20main/product.php" method="GET">
  <div class="input-group mb-3">
    <div class="input-group-prepend"> </div>
    
    <select class="custom-select" id="price" name = "pr">
      <option disabled selected>Price range</option>
      <option value="500">&lt;$500</option>
      <option value="1000">$500-&gt;$1000</option>
      <option value="2500">$1000-&gt;$2500</option>
    </select>
    
      
      
    </select>
    <select class="custom-select" id="sort" name="sort">
      <option disabled selected>Sort</option>
      <option value="ASC">By price: Low to High</option>
      <option value="DESC">By price: High to Low</option>
    </select>
    <button class="btn btn-outline-secondary"  type="submit">Search</button>
  </div>
</form>


<?php
  break;
  }
  ?>

