<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/floattotalcart.css">     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<!--/header_top-->
        <!--/header-middle-->
        <!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody id="tablePanier">
						<!--<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Produit test A</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p class="price">$78</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="" id="p1PLus"> + </a>
									<input class="cart_quantity_input" id="p1" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="" id="p1Moins"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price PriceTT" id="p1Total">$78</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p class="price">$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="" id="p2Plus"> + </a>
									<input class="cart_quantity_input" type="text" id="p2" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="" id="p2Moins"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price PriceTT" id="p2Total">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p class="price">$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="" id="p3Plus"> + </a>
									<input class="cart_quantity_input" type="text" id="p3" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="" id="p3Moins"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price PriceTT" id="p3Total">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>-->
					</tbody>
				</table>
			</div>
			<div>
				<div class="col-sm-6 center">
					<button type="button" class="btn btn-default get" id="valideComande">Valider la Commande</button>
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<section class="floating-total">
        Total : <span id="total-price">$0.00</span>
    </section>

	<section class="containerConfirmation">
		<div class="connexion">
            <span class="trairose"></span>
            <form action="#" class="inputConnexion">
                <h1>Confirmation de la commande</h1>
                <div class="champ">
                    <input type="email" placeholder="Email" required>
                    <!--<label>Email</label>-->
                    <i></i>
                    <!--<span class="glyphicon glyphicon-envelope">-->
                </div>
                <div class="champ">
                    <input type="text" placeholder="N° de téléphone" required>
                    <!--<label>N° téléphone</label>-->
                    <i></i>
                    <!--<span class="glyphicon glyphicon-lock"></span>-->
                </div>
                <div class="restc">
                    <div><input id="box" type="checkbox" name="rConnecte"> Garder l'historique</div>
                </div>
                <input type="submit" value="Se connecter">
            </form>
        </div>
	</section>
	<footer id="footer"><!--Footer-->
		<?php include 'includes/footerbottom.php'; ?>
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/jQueryCookie.js"></script>
	<script src="js/varJs.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>-->
	<script src="js/gestionEvent.js"></script>
</body>
</html>