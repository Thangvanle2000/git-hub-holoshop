<div name = "content" class="col-9 ">
    <table width="80%" border="1" cellspacing="5" cellpadding="5" style="text-align: center">
      <tbody>
        <tr>
          <th width="5%" scope="col">&nbsp;</th>
          <th width="20%" scope="col">Image</th>
          <th width="50%" scope="col"> Name</th>
          <th width="20%" scope="col">Price</th>
        </tr>
        <?php
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td></td>
          <td>Total:&nbsp;&nbsp;<b style="color: #FF0004" >$<?php echo $total?></b></td>
        </tr>
      </tbody>
    </table>
    <div class="row">
      <div class="col-7">
        <div class="">
          <div class="row">
            
			 <div class="col-4"></div> 
            <div class="col-6" >
                <img src="https://img.icons8.com/color/48/000000/visa.png" />
				<img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> 
				<img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
          </div>
          <form>
            <input type="text">
          </form>
        </div>
      </div>
      <div class="col-5">
        <div class="right border">
          <di class="header">
          Order Summary</div>
        <hr>
        <div class="row lower">
          <div class="col text-left">Subtotal</div>
          <div class="col text-right">$ 46.98</div>
        </div>
        <div class="row lower">
          <div class="col text-left">Delivery</div>
          <div class="col text-right">Free</div>
        </div>
        <div class="row lower">
          <div class="col text-left"><b>Total to pay</b></div>
          <div class="col text-right"><b>$ 46.98</b></div>
        </div>
        <div class="row lower">
          <div class="col text-left"><a href="#"><u>Add promo code</u></a></div>
        </div>
        <button class="btn-success">Place order</button>
        <p class="text-muted text-center">Complimentary Shipping & Returns</p>
      </div>
    </div>
    <div> </div>
  </div>