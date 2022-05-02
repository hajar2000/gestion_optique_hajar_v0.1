<?php
require_once("Produit.php");
require_once("ProduitAchete.php");
require_once("Client.php");
session_start();
require_once("Connexion.php");


class CommandeService{
private  $DbConnectInstance=null;
public function __construct(){
  

}

  public function PasserCommande(){
    try {
      // Create connection
      $con = new Connexion();
      $this->DbConnectInstance=$con->getConnexionInstance();
      $response=$this->DbConnectInstance->prepare("insert into commande (codeCommande,dateCommande,codeClient) values (:pCodeCommande,:pDateCommande,:pCodeClient)");
        $CurrentDateCommande=date("Y/m/d");
        
        $Client=$_SESSION['client'];
      
      $Data= array("pCodeCommande" =>null,
      "pDateCommande"=>$CurrentDateCommande,
      "pCodeClient"=> $Client->getCodeClient());
      $response->execute($Data);
      if($response !=null){
   


        $responseCodeCommande=$this->DbConnectInstance->prepare("select max(codeCommande) as maxCodeCommande from commande");
    $responseCodeCommande->execute();
    $CodeCommande=0;
    while($DataCommande=$responseCodeCommande->fetch()){
            
            $CodeCommande=$DataCommande['maxCodeCommande'];
            echo   $CodeCommande;
            break;


    }
    $responseCodeCommande->closeCursor();

        $Panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : NULL;
        //print_r($Panier);
        $ListeProduits = isset($_SESSION['produits']) ? $_SESSION['produits'] : NULL;

        foreach($ListeProduits as $produit){

	
          foreach($Panier as $Key =>$produitAchete){
            $CodeProduit=$Key;
              if($CodeProduit == $produit->getCodeProduit() ){
                
                
                $prixTotal=$produitAchete->getPrixTotal()>0?$produitAchete->getPrixTotal():$produit->getPrix();
                $responseInsertLigneCommande=$this->DbConnectInstance->prepare("insert into lignecommande (codeLigneCommande,codeCommande,qantite,prixTotal,codeProduit,codeOrdonance) values (:pcodeLigneCommande,:pcodeCommande,:pqantite,:pprixTotal,:pcodeProduit,:pcodeOrdonance)");
                $DataLigneCommande= array("pcodeLigneCommande" =>null,
                "pcodeCommande"=>$CodeCommande,
                "pqantite"=> $produitAchete->getQuantiteDemandee(),
                "pprixTotal"=>$prixTotal,
                "pcodeProduit"=>$produit->getCodeProduit(),
                "pcodeOrdonance"=>1
              );
                $responseInsertLigneCommande->execute($DataLigneCommande);
             
              }
              
          }}
                 //Create a new commande 
        echo "Commande has been successfully created!";
      }else{

      echo "Error creation Commande";
      }
     
    } catch (Exception $e) {
      die("Error creation Commande =>".$e->getMessage());
    }
    

  }
}
?>