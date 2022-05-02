<?php

include("..//Connexion.php");
require_once("..//Produit.php");
class GestionProduitService{

    
  public function GestionProduitService(){
      
                }

                public function ajouterProduit($Produit){
                    try {
                        // Create connection
                        $con = new Connexion();
                        $this->DbConnectInstance=$con->getConnexionInstance();
                        $response=$this->DbConnectInstance->prepare("insert into produit (codeProduit,labell,prix,quantite,photo,rank,codeBrand) 
                        values (:pcodeProduit,:plabell,:pprix,:pquantite,:pphoto,:prank,:pcodeBrand)");
 
  $Data= array("pcodeProduit" =>null,
              "plabell"=>$Produit->getLabell(),
              "pprix"=>$Produit->getPrix() ,
              "pquantite"=>$Produit->getQuantite(),
              "pphoto"=>$Produit->getPhoto(),
              "prank"=>$Produit->getRank(),
              "pcodeBrand"=>$Produit->getCodeBrand());
  $response->execute($Data);
  if($response !=null){
     
    echo "Produit has been successfully created!";
   }else{
    echo "Erreur Produit  created!";

   }
  
} catch (Exception $e) {
  die("Error =>".$e->getMessage());
}
                }
                public function supprimerProduit($CodeProduit){
                    try{
                      // Create connection
                  $con = new Connexion();
                  $this->DbConnectInstance=$con->getConnexionInstance();
                  $response=$this->DbConnectInstance->prepare("delete from produit where codeProduit=:pcodeProduit");

              $Data= array("pcodeProduit" =>$CodeProduit);
              $response->execute($Data);
              if($response !=null){
                  
                echo "Produit has been successfully deleted!";
              }else{
                echo "Erreur Produit  deleted!";

              }


            } catch (Exception $e) {
              die("Error =>".$e->getMessage());
            }


                }
                public function modifierProduit($CodeProduit, $Produit){
                  try {
                    // Create connection
                    $con = new Connexion();
                    $this->DbConnectInstance=$con->getConnexionInstance();
  $response=$this->DbConnectInstance->prepare("update produit set labell=:plabell,prix=:pprix,quantite=:pquantite,photo=:pphoto,rank=:prank,codeBrand=:pcodeBrand where codeProduit =:pcodeProduit");

                      $Data= array("pcodeProduit" =>$CodeProduit,
                                "plabell"=>$Produit->getLabell(),
                                "pprix"=>$Produit->getPrix() ,
                                "pquantite"=>$Produit->getQuantite(),
                                "pphoto"=>$Produit->getPhoto(),
                                "prank"=>$Produit->getRank(),
                                "pcodeBrand"=>$Produit->getCodeBrand());
                      $response->execute($Data);
                      if($response !=null){
                      
                      echo "Produit has been successfully updated!";
                      }else{
                      echo "Erreur Produit  updated!";

                      }

                      } catch (Exception $e) {
                      die("Error =>".$e->getMessage());
                      }

                }
                  /////

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
                                   echo $Photo;  //à supprimer Dev
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
                public function chercherProduitByCodeProduit($CodeProduit){
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
                                   //echo $Photo;
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