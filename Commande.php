<?php
class Commande{
    private $CodeCommande;
    private $DateCommande;
    private $CodeClient;

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

        public function setCodeClient($CodeClient){
            $this->CodeClient=$CodeClient;
        }
    public function getCodeClient(){
           return  $this->CodeClient;
        }


}

?>