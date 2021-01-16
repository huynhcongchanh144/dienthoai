<?php session_start();
include('../Connect/connect.php');
$_SESSION["url"] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE HTML>
<head>
<title>Shop Điện Tử</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript" src="../js/startstop-slider.js"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">00000000</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li>Hi,<a href=""><?php echo ($_SESSION['username']); ?></a></li>
                    <li><a href="../index.php"><?php  session_destroy();  ?>Logout</a></li>
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="Cart.php">My Cart</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img style="" src="../images/logo.png" alt="" /></a>
			</div>
			  <div class="cart">
			  	   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			    	<li><a href="about.html">About</a></li>
			    	<li><a href="delivery.html">Delivery</a></li>
			    	<li><a href="news.html">News</a></li>
			    	<li><a href="contact.html">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form action="../include/search.php" method="post">
	     			<input type="text" value="Search" name="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
					<h3>Categories</h3>
				  <?php 
				 	include('../include/category.php') 
				  ?>

					  <h3>Producer</h3>
					  <?php
							include('../include/producer.php')
					  ?>						
				</div>					
	  	     </div>
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a href="preview.html"><img src="../images/slide-1-image.png" alt="learn more" /></a>									    
									  </div>
						             	<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 20% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
							            </div>
							             <a href="preview.html" class="button">Shop Now</a>
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
						             	<div class="slide">
						             		<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 40% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services</h4>							               
							            </div>
							             <a href="preview.html" class="button">Shop Now</a>
					                   </div>		
						             	 <div class="slider-img">
									     <a href="preview.html"><img src="../images/slide-3-images.jpg" alt="learn more" /></a>
									  </div>						             					                 
									  <div class="clear"></div>				
				                  </div>
				                  <div class="slide">						             	
					                  <div class="slider-img">
									     <a href="preview.html"><img src="../images/slide-2-image.jpg" alt="learn more" /></a>
									  </div>
									  <div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 10% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
							            </div>
							             <a href="preview.html" class="button">Shop Now</a>
					                   </div>	
									  <div class="clear"></div>				
				                  </div>												
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
			<?php
				if(isset($_GET["act"]))
					$act = $_GET["act"];
				else
					$act = "index";
										
						switch($act)
							{
								case "Category":
									include('../include/products-by-category.php');
									break;
								case "Producer"	:
									include('../include/products-by-producer.php');
									break;					
							}
									
			?>			
    	<div class="content_top" style="background-color:#383838">					
    		<div class="heading">
    		<h3 style="color: white">New Products</h3>
    		</div>
    		<div class="see">
    			<p ><a style="color: white" href="../products.php">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<?php
					$sql="SELECT * FROM `products` ORDER BY ABS( DATEDIFF( day_entry, NOW() ) ) 
                    LIMIT 10";
                    $bang = connect::ExecuteQuery($sql);
                    while($dong=mysqli_fetch_array($bang))
                    {
                        $src="../images/".$dong["product_image"];
                        ?>
                            <div class="product">
                                <?php
                                        ?>                           
                                            <a href="#"><img src=<?php echo $src ?> alt=""></a>   
                                            <h2><?php echo $dong["product_name"] ?></h2>
                                            <div class="price-details">
                                            <div class="price-number">
                                            <p><span class="rupees"></span><?php echo $dong["product_price"] ?> đồng</p>
                                            </div>
                                                   <div class="add-cart">								
                                                    <h4><a href="preview.html">Add to Cart</a></h4>
                                                 </div>
                                             <div class="clear"></div>
                                            </div>
                                        <?php					    
                                    ?>
                                </div>
                        <?php
                    }
				?>
			</div>
			<div class="content_bottom" style="background-color:#383838">
    		<div class="heading">
    		<h3 style="color: white">Best - Selling Products</h3>
    		</div>
    		<div class="see">
    			<p><a style="color: white" href="../products.php">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php
					 $sql="SELECT * FROM `products` ORDER BY Quantity_sold DESC 
                     LIMIT 10";
                     $bang = connect::ExecuteQuery($sql);
                     while($dong=mysqli_fetch_array($bang))
                     {
                         $src="../images/".$dong["product_image"];
                         ?>
                            <div class="product">
                                 <?php
                                         ?>                           
                                             <a href="#"><img src=<?php echo $src ?> alt=""></a>   
                                             <h2><?php echo $dong["product_name"] ?></h2>
                                             <div class="price-details">
                                             <div class="price-number">
                                             <p><span class="rupees"></span><?php echo $dong["product_price"] ?> đồng</p>
                                             </div>
                                                    <div class="add-cart">								
                                                     <h4><a href="preview.html">Add to Cart</a></h4>
                                                  </div>
                                              <div class="clear"></div>
                                             </div>
                                         <?php					    
                                     ?>
                                 </div>
                         <?php
                     }
				?>
                                <style>
                            .product img{
                                width: 200px;
                                height: 199px;
                            }

                            .product{
                                width: 250px;
                                height: 300px;
                                float: left;
                                margin: 10px;
                                margin-right: 20px;
                                text-align:center;
                                border: 1px solid #ebe8e8;
                            }

                            .product h2{
                                font-size: 14px;
                                color: blue
                            }
                </style>
			</div>
    </div>
 </div>
</div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="../about.html">About Us</a></li>
						<li><a href="../contact.html">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="../delivery.html">Orders and Returns</a></li>
						<li><a href="../contact.html">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="../about.html">About Us</a></li>
						<li><a href="../contact.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="../contact.html">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="../contact.html">Sign In</a></li>
							<li><a href="../index.php">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="../contact.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="../images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="../images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="../images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="../images/dribbble.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="../images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				<p>&copy; 2013 home_shoppe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

