<?php
require_once("GestionProduitService.php");
require_once("..//Produit.php");


try {
   

$LabellProduit = $_POST['labellProduit'];
$PrixProduit = $_POST['prixProduit'];
$QuantiteProduit = $_POST['quantiteProduit'];
$RankProduit = $_POST['rankProduit'];
$BrandProduit = $_POST['brandProduit'];
$PhotoProduit = $_POST['photoProduit'];

if(isset($_POST['labellProduit']) and !empty($_POST['labellProduit']) 
and isset($_POST['prixProduit']) and !empty($_POST['prixProduit']) 
and isset($_POST['quantiteProduit']) and !empty($_POST['quantiteProduit'])
and isset($_POST['rankProduit']) and !empty($_POST['rankProduit'])
 and isset($_POST['brandProduit']) and !empty($_POST['brandProduit']) 
 and isset($_POST['photoProduit']) and !empty($_POST['photoProduit'])){


$NouveauProduit=new Produit();
    $NouveauProduit->setPrix($PrixProduit);
    $NouveauProduit->setLabell($LabellProduit);
    $NouveauProduit->setCodeBrand($BrandProduit);
    $NouveauProduit->setQuantite($QuantiteProduit);
    $NouveauProduit->setRank($RankProduit);
    $NouveauProduit->setPhoto($PhotoProduit);
    /*print_r($NouveauProduit);
    echo "Ok creation produit";*/
    $gestionProduitsService=new GestionProduitService();
    $gestionProduitsService->ajouterProduit($NouveauProduit);


}else{
    echo "erreur creation produit";
}
  }
  
  //catch exception
  catch(Exception $e) {
    echo 'Exception  Message: ' .$e->getMessage();
  }
?>