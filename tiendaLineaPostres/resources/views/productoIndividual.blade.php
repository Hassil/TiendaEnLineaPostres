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
					
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
					
	<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
	 <ul class="nav navbar-nav menu__list">
		<li class="active menu__item menu__item--current">
			<a class="menu__link" href="index.html">
				Home 
			<span class="sr-only"> (current) </span> 
			</a>
		</li>
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
		</ul>
	</div>
		</div>
		</nav>
		</div>
		</div>
		</div>
	                  

      
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					 <div class="men-thumb-item">
					<img src="../images/carrusel/imagen.png" alt="">					
						<span class="product-new-top"></span>					
				</div>
					
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					@foreach($productos as $p)
					<h3>{{$p->nombre}}</h3>
					<p><span class="item_price">${{$p->nombre}}</span></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
					<h5>Descripcion</h5>
					<p>
						sjfsdjfksdfjkds
					</p>
						

					</div>
					
					@endforeach
					
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Wing Sneakers">
																	<input type="hidden" name="amount" value="650.00">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
					</div>
					
					
		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<h1>Comentarios</h1>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					  
						<div class="tab2">
							
							<div class="single_page_agile_its_w3ls">
								<div class="bootstrap-tab-text-grids">
								
									<div class="bootstrap-tab-text-grid">
										
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li value=""><a href="#">admi</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
											</ul>
											<p >Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
												suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
												vel eum iure reprehenderit.</p>
										</div>
										<div class="clearfix"> </div>
						             </div>
									 <div class="add-review">
										<h4>add a review</h4>
                                         
										<form action="{{url('/guardaComentario')}}" method="post">
										<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
												<input type="text" name="nombre" required="nombre">
												<input type="email" name="correo" required="correo"> 
												<textarea name="comentario" required="comentario"></textarea>
                                                @foreach($productos as $p)
                                                 <input type="hidden" name="idProducto" value="{{$p->id}}">
                                                @endforeach

											<input type="submit" value="ENVIAR">
										</form>

									</div>
								 </div>
								 
							 </div>
						 </div>
						  
					</div>
				</div>	
			</div>




	</body>

	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>

</html>