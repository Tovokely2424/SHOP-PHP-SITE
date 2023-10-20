<?php 
    require 'includes/bddConnect.php';
    require 'includes/ressource.php';
    require 'includes/Produit.php';
    require 'includes/inclureClasses.php';
    $produitManagerPage = new ProduitManager($bddConect);

    if(isset($_POST['insertion'])){
        $cathegorie  = filter_input(INPUT_POST, 'cathegorie', FILTER_SANITIZE_STRING);
        $sousCathegorie = filter_input(INPUT_POST, 'sous_cathegorie', FILTER_SANITIZE_STRING);

        $utilisateur = new Produit(
            [
                'nom' => htmlspecialchars($_POST['anarana']),
                'descript' => $_POST['famariparitana'],
                'image_p' => 'image/gris.jpg',
                'cathegorie_p' => $sousCathegorie,
                'prix' => htmlspecialchars($_POST['vidiny']),
                'region_p' => htmlspecialchars($_POST['famariparitana']),
                'ref_produit' =>'1-FEUPX8102'
            ]
        );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Insertion | MADA-Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
        <?php include 'includes/htop.php' ?>
		<!--/header_top-->
        <?php include 'includes/hmiddle.php' ?>
		<!--/header-middle-->
		<!--/header-bottom-->
	</header><!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">
        <h2 id="titre">Fampidirana vokatra vao2</h2>
			<form  action="insertion.php" method="POST">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="product-part-1">
                            <fieldset>
                                <legend>A propos du produit</legend>
                                <input type="text" name="anarana" placeholder="Anaran'ny vokatra" required/>
                                <input type="number" name="vidiny" placeholder="Prix en Fmg" required/>
                                <textarea id="message" type="text" name="famariparitana" required="required" class="form-control" rows="8" placeholder="Mombamomba ilay vokatra"></textarea>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="product-part-2">
                            <fieldset>
                                <legend>A propos du produit</legend>
                                <select name="cathegorie" id="cath">
                                    <?php foreach ($cathegorieProduits as $cathegorieProduit => $value) { ?>
                                        <option value="<?php echo $value; ?>" class="cath-product-option"><?php echo $value; ?></option>
                                    <?php  } ?>
                                </select>
                                <select name="sous_cathegorie" id="souscath">
                                </select>
                            </fieldset>
                            <fieldset>
                                <legend>Province & région</legend>
                                    <select name="Cathégorie" id="cath">
                                        <?php foreach ($provinces as $province => $value) {
                                    ?>
                                        <option value="<?php echo $province; ?>" class="cath-product-option"><?php echo $value; ?></option>
                                        <?php  } ?>
                                    </select>
                                    <select name="region" id="cath">
                                        <?php foreach ($regions as $region => $value) {
                                    ?>
                                        <option value="<?php echo $region; ?>" class="cath-product-option"><?php echo $value; ?></option>
                                        <?php  } ?>
                                    </select>
                                <input type="file" name="image_p" placeholder="image du produit" />
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="product-part-1">
                            <fieldset>
                                <legend>Couleur et taille</legend>
                                <div class="col-sm-5">
                                    <span>
								        <input type="checkbox" class="checkbox"> 
								        Couleur
							        </span>
                                </div>
                                <div class="col-sm-5">
                                    <span>
								        <input type="checkbox" class="checkbox"> 
								        Taille
							        </span>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default" name="insertion">Enregistrer</button>
            </form>
		</div>
	</section><!--/form-->

	<!--/Footer-->
    <?php include 'includes/footerbottom.php' ?>
	<!--/Footer-->

    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="js/insert.js"></script>
</body>
</html>