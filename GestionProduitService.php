<?php
require_once("Connexion.php");
require_once("Produit.php");

class GestionProduitService{
    private  $DbConnectInstance=null;


    public function __construct(){
        //construct
    }
    public function listeProduits(){
        $ListeProduits=array();
            try{
                 // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
                $reponse=$this->DbConnectInstance->prepare("select * from produit");
                $reponse->execute();
                            $index=0;
            
                    while($produit=$reponse->fetch()){
                                        
                        $Labell=$produit['labell'];
                        $Prix=$produit['prix'];
                        $Quantite=$produit['quantite'];
                        $CodeProduit=$produit['codeProduit'];
                        $Photo=$produit['photo'];
                       //echo $Photo;  //à supprimer Dev
                       $Produit=new Produit();
                       $Produit->setPrix($Prix);
                       $Produit->setLabell($Labell);
                       $Produit->setCodeProduit($CodeProduit);
                       $Produit->setQuantite($Quantite);
                       $Produit->setPhoto($Photo);
                           $ListeProduits[$index]= $Produit; 
                          $index++;
                
                }
                $reponse->closeCursor();
                return $ListeProduits;
                
            } catch (Exception $e) {
                die("Error Liste produit=> ".$e->getMessage());
                return $ListeProduits;
              }

    }
    public function listeProduitsByCodePorduit($CodeProduit){
        $Produit=NULL;
            try{
                 // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
                $reponse=$this->DbConnectInstance->prepare("select * from produit where codeProduit =$CodeProduit");
                $reponse->execute();
                            
            
                    while($produit=$reponse->fetch()){
                                        
                        $Labell=$produit['labell'];
                        $Prix=$produit['prix'];
                        $Quantite=$produit['quantite'];
                        $CodeProduit=$produit['codeProduit'];
                        $Photo=$produit['photo'];
                      // echo $Photo;
                       $Produit=new Produit();
                       $Produit->setPrix($Prix);
                       $Produit->setLabell($Labell);
                       $Produit->setCodeProduit($CodeProduit);
                       $Produit->setQuantite($Quantite);
                       $Produit->setPhoto($Photo);
                           return $Produit;
                         
                
                }
                $reponse->closeCursor();
                return $Produit;
                
            } catch (Exception $e) {
                die("Error Liste produit=> ".$e->getMessage());
                return $Produit;
              }

    }
}
?>