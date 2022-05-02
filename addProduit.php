<?php
session_start();
include("Produit.php");
include("ProduitAchete.php");
include("ProduitAcheteService.php");
$CodeProduit=$_GET['codeProduit'];
$ProduitAchete=new ProduitAchete();

$PrixTotal=isset($_GET['prixTotal'])?$_GET['prixTotal']:0;
$QuantiteDemandee=isset($_GET['quantiteDemandee'])?$_GET['quantiteDemandee']:1;

$ProduitAchete->setPrixTotal($PrixTotal);
$ProduitAchete->setCodeProduit($CodeProduit);
$ProduitAchete->setQuantiteDemandee($QuantiteDemandee);

$_SESSION['panier'][$CodeProduit]=$ProduitAchete;
header("location:index.php");
?>