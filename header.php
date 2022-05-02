
<?php


$Client = isset($_SESSION['client']) ?$_SESSION['client'] : null; ?>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +212 664 85 50 96</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> rhinosoft1@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-snap-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle" id="header-panier"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<!--<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>-->
							
							<!--<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>-->
						</div>
					</div>
					<div class="col-md-8 clearfix" id="div-panier">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav" >
								<li><a href=""><i class="fa fa-user"></i> Mon Compte</a></li>
								<li><a href=""><i class="fa fa-star"></i> Favoris</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Commander</a></li>
								<li id="li-panier"><a href="cart.php"><i class="fa fa-shopping-cart">

								</i> Panier<span style="color:#FE980F;font-weight:900;padding:3px;"><?php /*print_r($Panier);*/ echo count($Panier);?></span></a></li>
								<li><a href="javascript:viderPanier()"><i class="fa fa-lock"></i> Vider Panier</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Connexion</a></li>
								<li><a href="javascript:logout()"><i class="fa fa-book"></i> Deconnexion</a></li>
								<li><a href="#"><i class="fa fa-start"></i> Client connecté : <?php  
															if($Client!=null){

															echo $Client->getLogin();
															}  ?> </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Acceuil</a></li>
								<li class="dropdown"><a href="#">Mes Achats<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Produits</a></li>
										<li><a href="product-details.php">Détails produits</a></li> 
										<li><a href="checkout.php">Commander</a></li> 
										<li><a href="cart.php">Panier</a></li> 
										<li><a href="login.php">Connexion</a></li> 
                                    </ul>
                                </li> 
								<!--<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.php">Blog List</a></li>
										<li><a href="blog-single.php">Blog Single</a></li>
                                    </ul>
                                </li> 
							<li><a href="404.php">404</a></li>-->
								
								<li><a href="contact-us.php">Nous contacter</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<script>
			function logout(){
			$.ajax({
					url:"logoutController.php",    //the page containing php script logoutController
					type: "get",    //request type,
				
					success:function(result){
						console.log("Success logout");
						location.reload();
					}
					,error:function(result){

						console.log("Erreur logout");
					}
				});

		}
	</script>