<?php 
include("inc/connect.php");
include("inc/header.php");
	
include("inc/left.php");?>
<?php

if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}else{
			$page = 'menu';
		}
		switch ($page) {
			case 'cart':
				include("inc/cart.php");
				
				break;
				case 'aboutus':
					include("page/aboutus.php");
					
					break;
					case 'confirm':
						include("page/confirm.php");
						
						break;
			case 'contactus':
				include("page/contactus.php");
				
				break;
			case 'career':
				include("page/career.php");
				
				break;

			case 'feedback':
				include("page/feedback.php");
				
				break;


			case 'aboutus':
				include("page/aboutus.php");
				
				break;


			case 'news':
				include("page/news.php");
				
				break;
			case 'policy':
				include("page/policy.php");
				
				break;
			case 'term':
				include("page/term.php");
				
				break;
			case 'shipping':
				include("page/shipping.php");
				
				break;

			default:
			    include("inc/home.php");
				
				break;
		}
?>



<?php
include("inc/footer.php");
?>