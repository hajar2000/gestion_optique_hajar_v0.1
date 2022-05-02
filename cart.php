
<?php
require_once("Client.php");
require_once("Produit.php");
require_once("ProduitAchete.php");
session_start();

$Panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : NULL;
//print_r($Panier);
$ListeProduits = isset($_SESSION['produits']) ? $_SESSION['produits'] : NULL;

if($Panier == Null){
	header("location:index.php");
	return;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | Wiam-optic</title>
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
<?php
		include("header.php");
	?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed" id="table-items">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price<span style="padding:2.5px;font-weight:500;">(MAD)</span></td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($ListeProduits as $produit){

	
							foreach($Panier as $Key =>$produitAchete){
								$CodeProduit=$Key;
									if($CodeProduit == $produit->getCodeProduit() ){
									
								
								
								
								

							?>
						<tr id="<?=$produit->getCodeProduit();?>"   class="product_row">
							<td class="cart_product">
								<a href=""><img src="images/home/produits/<?=$produit->getPhoto();?>" alt="" style="height:100px;width:100px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="" class="code_produit"><?=$produit->getCodeProduit();?></a></h4>
								<p><?=$produit->getLabell();?></p>
							</td>
							<td class="cart_price">
								<p  class="cart_unite_price"><?=$produit->getPrix();?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="#"> + </a>
									<input class="cart_quantity_input"  type="text" name="quantity" value="<?=$produitAchete->getQuantiteDemandee();?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="#"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php $prix=$produitAchete->getPrixTotal()>0?$produitAchete->getPrixTotal():$produit->getPrix();
								echo $prix;
								?></p>
							</td>
							<td>
							<span style="padding:2.5px;font-weight:500;">MAD</span>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="#"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php  	}//end if
						 }; //end inner loop
					}; //end outer loop?>
						
						
					</tbody>
				</table>
				<div  style="margin-left: 750px;">
				<h2>Prix Total : <span  id="prixTotalGlobal" >0 </span><span style="margin: 22px">MAD<span></h2>
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Voulez vous continuer l'achat ?</h3>
				<p>Confirmer votre commande.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Commande avec facture</label>
							</li>
							
						</ul>
						<!--<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>-->
						<a class="btn btn-default update" href="javascript:passerCommande()" id="btn-passer-commande">Passer commande</a>
						<a class="btn btn-default check_out" href="">Annuler</a>
					</div>
				</div>
				<!--<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>-->
			</div>
		</div>
	</section><!--/#do_action-->

	<?php
		include("footer.php");
	?>
	
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="panier.js"></script>

	<script>
		function passerCommande(){
						
						$.ajax({
							url:"PasserCommandeController.php",    //the page containing php script PasserCommandeController
							type: "post",    //request type,
						
							success:function(result){
								
							console.log("Ok commande passed");
								
								
							}
							,error:function(result){
		
								console.log("Error :NO commande passed");
							}
						}); 
						
						}
	</script>
</body>
</html>