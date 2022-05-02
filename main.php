<?php
//include_once("GestionProduitService.php");
//include_once("BrandService.php");
//include_once("Brand.php");
//include_once("Connexion.php");
////include("ProduitAchete.php");
//include("ProduitAcheteService.php");
/*include("InscriptionService.php");
include_once("Client.php");  */
include("CommandeService.php");

/*$connexion =new Connexion();
    $DbConnectInstance=$connexion->getConnexionInstance();*/
    /*$Produit= new Produit();
    $CodeProduit=1;
    $Produit->setCodeProduit($CodeProduit);
    $ProduitAchete=new ProduitAchete();
    $ProduitAchete->setProduit($Produit);
    $Panier=array();
    $Panier[$CodeProduit]=$ProduitAchete;
    $Panier[2]=$ProduitAchete;
            echo "Service produit panier=> ".count($Panier);*/
           /* $BrandService=new BrandService();
$ListeBrands= $$BrandService->listeBrands();
print_r($ListeBrands);
*/

     /*   $Panier;
    $Panier[1]="p1";
    foreach($Panier as $key=>$value){
            echo $value;


    }*/
   

    
/*
    $gestionProduitsService=new GestionProduitService();
   $ListeProduits= $gestionProduitsService->listeProduits();
   foreach($ListeProduits as $produit){
						
    $Photo=$produit->getPhoto();
    echo $Photo;
    }
 */
   /*if($ListeProduits != null){
    while($produit=$ListeProduits->fetch()){
                        
        $Labell=$produit['labell'];
        $Prix=$produit['prix'];
        echo   $Labell."<br/>".$Prix;
       


}
$ListeProduits->closeCursor();
   }else{
    echo 'Null Liste';
   }
  */
/*$inscriptionServ=new InscriptionService();
$client=new Client();
$client->setNom("Ali Mohamed Soucou");

$inscriptionServ->subscribe($client);
$inscriptionServ->login();*/
/*$responseCodeClient=$DbConnectInstance->prepare("select max(codeClient) as maxCodeClient from client");
    $responseCodeClient->execute();
    $CodeClient=0;
    while($data=$responseCodeClient->fetch()){
            
            $CodeClient=$data['maxCodeClient'];
            echo   $CodeClient;
            break;


    }
    $responseCodeClient->closeCursor();
   */
 $CommandeService =new CommandeService();
                $CommandeService->PasserCommande();


        
?>