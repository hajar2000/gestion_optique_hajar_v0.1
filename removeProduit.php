<?php
include("Produit.php");
include("ProduitAchete.php");
include("ProduitAcheteService.php");
session_start();

$CodeProduit=$_GET['codeProduit'];
//echo $CodeProduit;
$Panier=$_SESSION['panier'];
foreach ($Panier as $key =>$item){
    /*if(condition){
      unset($item[$key]);
    }*/
    if($key == $CodeProduit){
        //echo $key."<br/>";
        unset($Panier[$key]);
    }
    
  }
$_SESSION['panier']=$Panier;
//print_r($_SESSION['panier']);
//header("Location:cart.php");

?>