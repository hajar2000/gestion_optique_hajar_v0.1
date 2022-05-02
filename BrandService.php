<?php
require_once("Connexion.php");
require_once("Brand.php");
class BrandService{
    private  $DbConnectInstance=null;


    public function __construct(){
        //construct
    }
    public function listeBrands(){
        $ListeBrands=array();
            try{
                 // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
                $reponse=$this->DbConnectInstance->prepare("select * from brand");
                $reponse->execute();
                            $index=0;
            
                    while($brand=$reponse->fetch()){
                        $CodeBrand=$brand['codeBrand'];
                         $Mark=$brand['mark'];
                         $Type=$brand['type'];
                         $Categorie=$brand['categorie'];
                                        
                        $Brand=new Brand();
                        $Brand->setCodeBrand($CodeBrand);
                        $Brand->setMark($Mark);
                        $Brand->setType($Type);
                        $Brand->setCategorie($Categorie);
                       
                       
                           $ListeBrands[$index]= $Brand; 
                          $index++;
                
                }
                $reponse->closeCursor();
                return $ListeBrands;
                
            } catch (Exception $e) {
                die("Error Liste brand=> ".$e->getMessage());
                return $ListeBrands;
              }

    }
   
}
?>