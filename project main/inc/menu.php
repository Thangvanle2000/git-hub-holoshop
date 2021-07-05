<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <div class="agileits-navi_search">
		  <form action="#" method="post">
		  <select name="agileinfor-nav_search" id="agileinfor_search">
		  <option value=""> List product</option>
		  <?php 
		  while($row_category = mysqli_fetch_array($sql_category)){
		  ?>
		  <option value="<?php echo $row_category['category_id'] ?>"><?php echo $row_category['category_name'] ?></option>
		  <?php 
		  } 
		  ?>
		  </select>
		  
		  </form>

		  </div>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="test.php">Home <span class="sr-only">(current)</span></a>
            </li>
			
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Computer</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="asus.php">ASUS</a>
                <a class="dropdown-item" href="macbook.php">Macbook</a>
                <a class="dropdown-item" href="dell.php">DELL</a>
				<a class="dropdown-item" href="hp.php">HP</a>
				<a class="dropdown-item" href="acer.php">Acer</a>
				 
				  
              </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Camera&nbsp;</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">Sony</a>
				  <a class="dropdown-item" href="#">Kodak</a>
				  <a class="dropdown-item" href="#">Canon</a>
 				  <a class="dropdown-item" href="#">Fujifilm</a>
			  </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Device&nbsp;</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="headphone.php">Headphone</a>
				  <a class="dropdown-item" href="keyboard.php">Keyboard</a>
                  <a class="dropdown-item" href="mouse.php">Mouse</a></div>
            </li>
            
            <li class="nav-item"> <a class="nav-link" href="About us.php">About us</a></li>
			  
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>