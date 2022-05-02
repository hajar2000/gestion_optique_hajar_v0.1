<?php
require_once("GestionProduitService.php");
require_once("..//Produit.php");

$gestionProduitsService=new GestionProduitService();

    /*$Produit= new Produit();
    $CodeProduit=1;
    $Produit->setCodeProduit($CodeProduit);
   
    
           


   

    

   
   $ListeProduits= $gestionProduitsService->listeProduits();
   foreach($ListeProduits as $produit){
						
    $Photo=$produit->getPhoto();
    echo $Photo."<br/>";
    }*/
/*$ProduitChercher= $gestionProduitsService->chercherProduitByCodeProduit(1);
print_r($ProduitChercher);*/
$NouveauProduit=new Produit();
    $NouveauProduit->setPrix(350);
    $NouveauProduit->setLabell("Produit4");
    $NouveauProduit->setCodeBrand(2);
    $NouveauProduit->setQuantite(30);
    $NouveauProduit->setRank(1);
    $NouveauProduit->setPhoto("p4.jpg");

    //$gestionProduitsService->ajouterProduit($NouveauProduit);

   $CodeProduitModifie=4;
   $CodeProduitSupprimer=4;
   $ProduitModifie=$NouveauProduit;
   //$gestionProduitsService->modifierProduit($CodeProduitModifie,$ProduitModifie);
   $gestionProduitsService->supprimerProduit($CodeProduitSupprimer);

   
  




        
?>