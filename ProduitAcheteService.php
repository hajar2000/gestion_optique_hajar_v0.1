<?php
include_once("Produit.php");
include_once("ProduitAchete.php");

class ProduitAcheteService{
           
    public function ajouterAuPanier($ProduitAchete,$CodeProduit,$Panier){
            
        $Produit= new Produit();
        $CodeProduit=1;
        $Produit->setCodeProduit($CodeProduit);
        $ProduitAchete=new ProduitAchete();
        $ProduitAchete->setProduit($Produit);
        $Panier[$CodeProduit]=$ProduitAchete;
        $Panier[2]=$ProduitAchete;
                //echo "Service produit panier=> ".count($Panier);
                return $Panier;

    }



    
}
?>