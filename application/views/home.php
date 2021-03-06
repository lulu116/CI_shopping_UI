<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='https://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="<?php echo base_url()?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!--slider-script-->
		<script src="<?php echo base_url()?>js/responsiveslides.min.js"></script>
			<script>
				$(function () {
				  $("#slider1").responsiveSlides({
					auto: true,
					speed: 500,
					namespace: "callbacks",
					pager: true,
				  });
				});
			</script>
<!--//slider-script-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>
<body>
  <!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">	
			<div class="header-top-in">			
				<div class="logo">
					<a href=""><img src="<?php echo base_url()?>images/logo.png" alt=" " ></a>
				</div>
				<div class="header-in">
					<ul class="icon1 sub-icon1">
							<li  ><a href="wishlist.html">WISH LIST (0)</a> </li>
							<li  ><a href="<?php echo site_url('loginController')?>">  MY ACCOUNT</a></li>
							<li ><a href="#" > SHOPPING CART</a></li>
							<li > <a href="checkout.html" >CHECKOUT</a> </li>	
							<li><div class="cart">
									<a href="#" class="cart-in"> </a>
									<span> 0</span>
								</div>
								<ul class="sub-icon1 list">
						  <h3>Recently added items(2)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
					                <div class="list_img"><img src="<?php echo base_url()?>images/14.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                            <div class="cart_box1">
								  <div class="message1">
							   	     <div class="alert-close1"> </div> 
					                <div class="list_img"><img src="<?php echo base_url()?>images/15.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
	                        <div class="total">
	                        	<div class="total_left">CartSubtotal : </div>
	                        	<div class="total_right">$250.00</div>
	                        	<div class="clearfix"> </div>
	                        </div>
                            <div class="login_buttons">
							  <div class="check_button"><a href="checkout.html">Check out</a></div>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
							</li>
						</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
		<div class="header-bottom">
		<div class="container">
			<div class="h_menu4">
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><a href="<?php echo site_url('HomeController')?>"><i> </i>Desktops</a></li>
					<li ><a href="<?php echo site_url('ProductController')?>" >Laptops & Notebooks</a>
						<ul class="drop">
							<li><a href="products.php">Sony(2)</a></li>
							<li><a href="products.php">Android(4)</a></li>
							<li><a href="products.php">Apple(7)</a></li>
							<li><a href="products.php">Acer(53)</a></li>
							<li><a href="products.php">HP(78)</a></li>
							<li><a href="products.php">Intel(5)</a></li>
						</ul>
						</li> 						
						<li><a href="<?php echo site_url('ProductController')?>" >  Tablets</a></li>
						<li><a href="products.php" >Components</a></li>
						<li><a href="products.php" >Software</a></li>
						<li><a href="products.php" >Phones & PDAs </a></li>
						<li><a href="products.php" >  Cameras  </a></li>
						<li><a href="contact.html" >Contact </a></li>
					
				</ul>
				<script type="text/javascript" src="<?php echo base_url()?>js/nav.js"></script>
			</div>
		</div>
		</div>
		<div class="header-bottom-in">
			<div class="container">
			<div class="header-bottom-on">
			<p class="wel"><a href="#">Welcome visitor you can login or create an account.</a></p>
			<div class="header-can">
				<ul class="social-in">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="facebook"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>					
						<li><a href="#"><i class="skype"> </i></a></li>
					</ul>	
					<div class="down-top">		
							<select class="in-drop">
							  <option value="Dollars" class="in-of">Dollars</option>
							  <option value="Euro" class="in-of">Euro</option>
							  <option value="Yen" class="in-of">Yen</option>
							</select>
					 </div>
					<div class="search">
						<form>
							<input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" >
							<input type="submit" value="">
						</form>
					</div>

					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
	<div class="banner-mat">
		<div class="container">
			<div class="banner">
	
				<!-- Slideshow 4 -->
				<div class="slider">
			<ul class="rslides" id="slider1">
				<?php
					$imgUrl = base_url();
					foreach($slide as $slideval){
						$imgval = $imgUrl.'/images/banner_slide/'.$slideval['imgUrl'];
				?>
					  <li>
						  <img src="<?php echo $imgval?>" alt="" style="width:1112px;height: 350px;">
					  </li>
				<?php
				  }
				?>
			</ul>
		</div>

				<div class="banner-bottom">
					<div class="banner-matter">
						<p>Childish Gambino - Camp Now Available for just $9.99</p> 
						<a href="<?php echo site_url('single')?>" class="hvr-shutter-in-vertical ">Purchase</a>
					</div>
					<div class="purchase">
						<a href="<?php echo site_url('single')?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">Purchase</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>				
			<!-- //slider-->
		</div>
	</div>
		<!---->
		<div class="container">
			<div class="content">
				<div class="content-top">
					<h3 class="future">FEATURED</h3>
					<div class="content-top-in">
						<?php
							$staticslide1Url = base_url();
							foreach($static_small_slider as $staticslide1){
							$staticslide1img = $staticslide1Url.'/images/banner_slide/'.$staticslide1['imgUrl'];
								foreach($productMsg as $productmsg){
									if($staticslide1['product_id'] == $productmsg['product_id']){
										$title = $productmsg['title'];
										$price = $productmsg['price'];
										$productId = $productmsg['product_id'];

						?>
						<div class="col-md-3 md-col">
							<div class="col-md">

								<a href="<?php echo site_url('single?productId='.$productId)?>"><img src="<?php echo $staticslide1img?>" alt="" /></a>

								<div class="top-content">
									<h5><a href="<?php echo site_url('single?productId='.$productId)?>"><?php echo $title?></a></h5>
									<div class="white">
										<a href="<?php echo site_url('single?productId='.$productId)?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span><?php echo $price?></span></p>
										<div class="clearfix"></div>
									</div>

								</div>							
							</div>
						</div>
						<?php
									}
								}
							}
						?>
					<div class="clearfix"></div>
					</div>
				</div>
				<!---->
				<div class="content-middle">
					<h3 class="future">BRANDS</h3>
					<div class="content-middle-in">
					<ul id="flexiselDemo1">
						<?php
							$slideUrl = base_url();
							foreach ($static_small_slider1 as $staticImg) {
								$staticImg1 = $slideUrl.'/images/banner_slide/'.$staticImg['imgUrl'];
						?>
						<li><img src="<?php echo $staticImg1?>"/></li>
						<?php
						}
						?>
					</ul>
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.flexisel.js"></script>

					</div>
				</div>
				<!---->
				<div class="content-bottom">
					<h3 class="future">LATEST</h3>
					<div class="content-bottom-in">
					<ul id="flexiselDemo2">
						<?php
						$dynamicUrl = base_url();
						foreach($dynamics_small_slider as $dynamicimg){
							$dynamicImg = $dynamicUrl.'/images/banner_slide/'.$dynamicimg['imgUrl'];
								foreach($productMsg1 as $productmsg1){
								if($dynamicimg['product_id'] == $productmsg1['product_id']) {
									$title = $productmsg1['title'];
									$price = $productmsg1['price'];
									$productId = $productmsg1['product_id'];
									?>
									<li>
										<div class="col-md men">
											<a href="<?php echo site_url('single?productId='.$productId)?>" ?>" class="compare-in "><img
													src="<?php echo $dynamicImg ?>" alt=""/>
												<div class="compare in-compare">
													<span>Add to Compare</span>
													<span>Add to Wishlist</span>
												</div>
											</a>
											<div class="top-content bag">
												<h5><a href="<?php echo site_url('single?productId='.$productId)?>"><?php echo $title ?></a>
												</h5>
												<div class="white">
													<a href="<?php echo site_url('single?productId='.$productId) ?>"
													   class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO
														CART</a>
													<p class="dollar"><span
															class="in-dollar">$</span><span><?php echo $price ?></span></p>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</li>
									<?php
								                    }
											    }

										  }
						            ?>


					</ul>
					<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
					</div>
				</div>
				<ul class="start">
					<li ><a href="#"><i></i></a></li>
					<li><span>1</span></li>
					<li class="arrow"><a href="#">2</a></li>
					<li class="arrow"><a href="#">3</a></li>
					<li class="arrow"><a href="#">4</a></li>
					<li class="arrow"><a href="#">5</a></li>
					<li ><a href="#"><i  class="next"> </i></a></li>
				</ul>
			</div>
		</div>
		<!---->
		<div class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="col-md-4 footer-in">
						<h4><i> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-md-4 footer-in">
						<h4><i class="cross"> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-md-4 footer-in">
						<h4><i class="down"> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!---->
			<div class="footer-middle">
				<div class="container">
					<div class="footer-middle-in">
						<h6>About us</h6>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					<div class="footer-middle-in">
						<h6>Information</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Customer Service</h6>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Site Map</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>My Account</h6>
						<ul>
							<li><a href="<?php echo site_url('loginController')?>">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Extras</h6>
						<ul>
							<li><a href="#">Brands</a></li>
							<li><a href="#">Gift Vouchers</a></li>
							<li><a href="#">Affiliates</a></li>
							<li><a href="#">Specials</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<p class="footer-class">Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
</body>
</html>