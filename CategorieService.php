<?php
include("Connexion.php");
include("Categorie.php");
class CategorieService{
    private  $DbConnectInstance=null;


    public function CategorieService(){
        //construct
    }
    public function listeCategories(){
        $ListeCategories=array();
            try{
                 // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
                $reponse=$this->DbConnectInstance->prepare("select * from categorie");
                $reponse->execute();
                            $index=0;
            
                    while($categorie=$reponse->fetch()){
                        $CodeCategorie=$categorie['codeCategorie'];
                         $LabellCategorie=$categorie['labellcategorie'];
                       
                                        
                        $Categorie=new Categorie();
                        $Categorie->setCodeCategorie($CodeCategorie);
                        $Categorie->setLabellCategorie($LabellCategorie);
                    
                       
                       
                           $ListeCategories[$index]= $Categorie; 
                          $index++;
                
                }
                $reponse->closeCursor();
                return $ListeCategories;
                
            } catch (Exception $e) {
                die("Error Liste Categorie=> ".$e->getMessage());
                return $ListeCategories;
              }

    }
   
}
?>