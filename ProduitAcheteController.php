<?php
session_start();
include("Produit.php");
include("ProduitAchete.php");
include("ProduitAcheteService.php");//+-


$ProduitAchete=new ProduitAchete();
$QuantiteDemandee=0;

//$PrixTotal = isset($_GET['prixTotal']) ? $_GET['prixTotal'] : 0;
$CodeProduit = isset($_GET['codeProduit']) ? $_GET['codeProduit'] : null;
$Produit= new Produit();
//$CodeProduit=1;
$Produit->setCodeProduit($CodeProduit);
$ProduitAchete=new ProduitAchete();
$ProduitAchete->setProduit($Produit);
$Panier=array();
$Panier[$CodeProduit]=$ProduitAchete;
//$Panier[2]=$ProduitAchete;
        //echo "Before panier= ".count($Panier)."<br/>";


$_SESSION['panier']=$Panier;
$PanierSession=$_SESSION['panier'];
echo "After panier = ".count($PanierSession);




?>