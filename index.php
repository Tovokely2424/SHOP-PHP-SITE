
<?php
	session_start();
	require 'includes/bddConnect.php';
	require 'includes/fonctions_panier.php';
	require 'includes/ressource.php';
    require 'includes/inclureClasses.php';
    $produitManagerPage = new ProduitManager($bddConect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | MADA-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">    
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<!--/header_top-->
		<?php include 'includes/htop.php'; ?> 
		<!--/header-middle-->
		<?php include 'includes/hmiddle.php'; ?>
		<!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>MADA</span>-SHOP</h1>
									<h2>Ireo fampirantiana misy ankehitriny</h2>
									<p>Ato anaty sokajy fampirantsiana dia ahitanaoa ireo vokatra isan-tsokajy "promotion @izao fotoana izao" </p>
									<button type="button" class="btn btn-default get">Misimisy kokoa</button>
								</div>
								<div class="col-sm-6">
									<img src="images/cathegorie/promotion.jpg" class="girl img-responsive" alt="" />
									<!--<img src="images/home/pricing.png"  class="pricing" alt="" />-->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>MADA</span>-SHOP</h1>
									<h2>Ireo vokatra voasokajy mora</h2>
									<p>Miainga @ historique izay an'ireo serasera efa nataonao teto @ tambazotra. Tsindrio eto hahitanao ireo voasokajy mety ho tsara ho anao.</p>
									<button type="button" class="btn btn-default get">Misimisy kokoa</button>
								</div>
								<div class="col-sm-6">
									<img src="images/cathegorie/girl1.jpg" class="girl img-responsive" alt="" />
									<!--<img src="images/home/pricing.png"  class="pricing" alt="" />-->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>MADA</span>-SHOP</h1>
									<h2>Tolotra ho an'ireo mpivarotra</h2>
									<p>Tadidio fa afaka mandefa tolotra na varotra eto @ pejy ianao. Tsisndio ny bokotra raha te hehefantatra bebe kokoa</p>
									<button type="button" class="btn btn-default get">Mpandraharaha</button>
								</div>
								<div class="col-sm-6">
									<img src="images/cathegorie/vendeur.png" class="girl img-responsive" alt="" />
									<!--<img src="images/home/pricing.png" class="pricing" alt="" />-->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<!--cthegorie.php-->
                    <?php include 'includes/cathegorie.php'; ?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">ISAN-TSOKAJY</h2>

					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<!--cathegorietab.php-->
                        <?php include 'includes/cathegorietab.php'; ?>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Voasokajy Manokana</h2>
						<!---Recomended item : les itmes recommandé : pr recommanded.php-->
                        <?php include 'includes/recommanded.php'?>
					</div><!--/recommended_items-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Tendance</h2>
						<!---Recomended item : les itmes recommandé : pr recommanded.php-->
						<?php 
							  foreach ($produitManagerPage -> getProduitByCath('Akanjo', 6) as $akanjo) {
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<?php $iz = $akanjo -> getImage_p();?>
										<img src="<?php echo($iz);?>" alt="" />
										<h2><?php echo($akanjo -> getPrix()); ?> Ar</h2>
										<p><?php echo($akanjo -> getNom()); ?></p>
										<a href="ajouter" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Alaiko</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo($akanjo -> getPrix()); ?> Ar</h2>
											<p><?php echo($akanjo -> getNom()); ?></p>
											<a href="javascript:addToCart('<?php echo $akanjo -> getRef_produit();?>')" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Alaiko</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Souhait</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Ampitahaina</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>
					</div><!--/recommended_items-->
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<?php include 'includes/footerbottom.php'; ?>
	</footer><!--/Footer-->
    
    <script src="js/jquery.js"></script>
	<script src="js/jQueryCookie.js"></script>
	<script src="js/varJs.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="js/gestionEvent.js"></script>
	<script type="text/javascript">
		//Fonction pour ajouter un produit dans le panier
		function addToCart(productId) {
				loadProductByRef(productId, function(produit){
					var produitJson = JSON.stringify(produit);
					// Ajoutez le produit au panier en tant qu'objet JSON.
					panier.push({produit: [produitJson]});
					//panier.push(produit);
					$.cookie('panier', JSON.stringify(panier), { expires: 7, sameSite: 'None' });
					console.log(panier);
					alert("Produit ajouté au panier !");
				});
    	}
	</script>
</body>
</html>