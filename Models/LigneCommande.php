<?php
class LigneCommande{

    private $CodeLigneCommande;
    private $CodeClient;
    private $CodeCommande;
    private $PrixTotal;
    private $Quantite;

    public function LigneCommande(){}

    public function setCodeLigneCommande($CodeLigneCommande){
        $this->CodeLigneCommande=$CodeLigneCommande;
    }
    public function getCodeLigneCommande(){      
       return  $this->CodeLigneCommande;
    }
    public function setCodeClient($CodeClient){
        $this->CodeClient=$CodeClient;
    }
    public function getCodeClient(){      
       return  $this->CodeClient;
    }
    public function setCodeCommande($CodeCommande){
        $this->CodeCommande=$CodeCommande;
    }
    public function getCodeCommande(){      
       return  $this->CodeCommande;
    }

    public function setPrixTotal($PrixTotal){
        $this->PrixTotal=$PrixTotal;
    }
    public function getPrixTotal(){      
       return  $this->PrixTotal;
    }

    public function setQuantite($Quantite){
        $this->Quantite=$Quantite;
    }
    public function getQuantite(){      
       return  $this->Quantite;
    }

    
}

?>