<div name = "content" class="col-9 ">
  <table width="80%" border="1" cellspacing="5" cellpadding="5" style="text-align: center;
																empty-cells: hide;	   ">
    <tbody>
      <tr>
        <th width="5%" scope="col">&nbsp;</th>
        <th width="20%" scope="col">Image</th>
        <th width="50%" scope="col"> Name</th>
        <th width="20%" scope="col">Price</th>
      </tr>
      <?php
      if ( array_key_exists( 'clearcart', $_POST ) ) {
        addtocart();
      }


      function addtocart() {

        $_SESSION[ 'cart' ]= array(array());
        echo '<script type="text/javascript">
    window.open("index.php?page=cart","_self");
</script>';
		  ;
      }
      $total = 0;
      for ( $i = 1; $i < count( $_SESSION[ 'cart' ] ); $i++ ) {
        ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><img  src="images/<?php echo $_SESSION['cart'][$i][1]?>" alt=""/></td>
        <td><?php echo $_SESSION['cart'][$i][0]?></td>
        <td>$
          <?php $total = $total +$_SESSION['cart'][$i][2]; echo $_SESSION['cart'][$i][2]?></td>
      </tr>
      <?php }?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total:&nbsp;&nbsp;<b style="color: #FF0004" >$<?php echo $total?></b></td>
    </tbody>
  </table>
  <form action=""  method="post" class="p-4">
    <div class="row">
      <div class="col-10"></div>
      <div class="col-2">
        <button name="clearcart" class="btn btn-danger pl-sm" >Clear Cart</button>
      </div>
    </div>
	  </form>
    <br>
    <br>
	<form action="index.php?page=confirm"  method="post" class="p-4">
    <div class="row  border border-dark p-4 ">
      <div class="col-1"></div>
      <div class="col-6">
        <div class="">
          <div class="row">
            <div class="col-4"></div>
            <div class="col-6" > <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
          </div>
          <input name="name" placeholder="Name" maxlength="50" class="capitalize untouched pristine required" required>
          <input name="add" placeholder="Address" maxlength="50" class="capitalize untouched pristine required" required>
          <input name="tel" placeholder="Telephone number" maxlength="50" class="capitalize untouched pristine required" required>
			<input name="total" type="hidden" value="<?php echo $total?>">
          <br>
          <select>
            <option value="volvo">Debit card</option>
            <option value="saab">Credit card</option>
            <option value="mercedes" selected>Pay at Receive(COD)</option>
            <option value="audi">VNPay(QR code)</option>
          </select>
        </div>
      </div>
      <div class="col-4">
        <div class="row lower">
          <h3 class="text-center">Order Summary</h3>
        </div>
        <hr>
        <div class="row lower">
          <div class="col text-left">Subtotal</div>
          <div class="col text-right">$ <?php echo $total ;?></div>
        </div>
        <div class="row lower">
          <div class="col text-left">Delivery</div>
          <div class="col text-right">Free</div>
        </div>
        <div class="row lower">
          <div class="col text-left"><b>Total to pay</b></div>
          <div class="col text-right"><b>$ <?php echo $total ;?></b></div>
        </div>
        <button type="submit" class="btn btn-info btn-lg btn-block btn-leading-ficon add-to-cart-button">Place order</button>
        <br>
        <a  href= "index.php?page=shipping">
        <p class="text-center">Shipping & Return Policy</p>
        </a> </div>
		
      <div class="col-1"></div>
		<br>
    </div>
    <br>
  </form>
  <br>
  <div> </div>
</div>
