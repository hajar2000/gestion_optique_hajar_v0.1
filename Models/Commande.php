<?php
class Commande{
    private $CodeCommande;
    private $DateCommande;

    public function Commande (){}

    public function setCodeCommande($CodeCommande){
            $this->CodeCommande=$CodeCommande;
        }
    public function getCodeCommande(){
           return  $this->CodeCommande;
        }
        public function setDateCommande($DateCommande){
            $this->DateCommande=$DateCommande;
        }
    public function getDateCommande(){
           return  $this->DateCommande;
        }


}

?>