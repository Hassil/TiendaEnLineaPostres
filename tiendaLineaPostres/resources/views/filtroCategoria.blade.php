<!DOCTYPE html>
<html>
<head>
	<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet"> 
	<link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body>

	<div class="header" id="home">
		<div class="container">
			<ul>
			    <li> <a href="{{url('/login')}}" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Inciar Sesion </a></li>
				<li> <a href="{{url('/register')}}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Regsitrarse </a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 6677909090</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
			</ul>
		</div>
	</div>
	
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<div class="col-md-4 header-middle">
				<form action="#" method="post">
						<input type="search" name="search" placeholder="Search here..." required="">
						<input type="submit" value=" ">
					<div class="clearfix"></div>
				</form>
			</div>
			
				<div class="col-md-4 logo_agile">
					<h1><a href="index.html"><span>D</span>elicias <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
				</div>
	        
			<div class="col-md-4 agileits-social top_content">
							<ul class="social-nav model-3d-0 footer-social w3_agile_social">
	                       <li class="share">Share On : </li>
							<li>
								<a href="#" class="facebook">
									  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
							</li>
							<li>
								<a href="#" class="twitter"> 
									  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
							</li>
							<li>
							<a href="#" class="instagram">
								  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
							</li>
							<li><a href="#" class="pinterest">
								  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
						</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="#">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                          <ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">

										<ul class="multi-column-dropdown">
                                          @foreach($categorias as $c)
											<li><a href="{{url('/categoria')}}/{{$c->id}}">{{$c->nombre}}</a></li>

								               @endforeach
										</ul>    
									</div>
									</div>
									</ul>
							
					</li>
					<!--<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li> -->
					
					<li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
	                   <div class="new_arrivals_agile_w3ls_info"> 
			<div class="container">
			    <h3 class="wthree_text_info">Postres <span></h3>

			    <div class="resp-tabs-container">
	                 		    	<div class="tab1">

	             

	<div class="row">
	 @foreach($productos as $p)
		<div class="col-md-3 product-men">
			<div class="men-pro-item">
				<div class="men-thumb-item">
					<img src="../images/carrusel/imagen.png" alt="">					
						<span class="product-new-top"></span>					
				</div>
				<div class="item-info-product ">
					<h4><a href="{{url('/productoIndividual')}}/{{$p->id}}">{{$p->nombre}}</a></h4>
					<div class="info-product-price">
						<span class="item_price">Precio:${{$p->precio}}MXN</span>
						
					</div>
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="{{$p->nombre}}" />
									<input type="hidden" name="amount" value="{{$p->precio}}" />
									<input type="hidden" name="currency_code" value="MXN" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
																
						</div>
					</div>
		
				</div>
				@endforeach
	         </div>
	      </div>
	   </div>


	</body>

	<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><span>D</span>elicias</a></h2>
			<p>Lorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+1 234 567 8901</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Broome St, NY 10002,California, USA. 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4>Flickr <span>Posts</span></h4>
					<ul>
						<li><a href="single.html"><img src="../images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="../images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="../images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="../images/t4.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="../images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="../images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="../images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="../images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="../images/t4.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2017 Delicias. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>



<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="../js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="../js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="../js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->




	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>

</html>

                     
