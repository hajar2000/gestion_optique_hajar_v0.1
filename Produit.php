<?php
class Produit{
    private $CodeProduit;
    private $Labell;
    private $Prix;
    private $Quantite;
    private $Photo;
    private $Rank;
    private $CodeBrand;
    public function __construct(){

    }

    public function setCodeProduit($CodeProduit){
            $this->CodeProduit=$CodeProduit;

    }
    public function getCodeProduit(){
        return $this->CodeProduit;

        }
    public function setLabell($Labell){
            $this->Labell=$Labell;

    }
    public function getLabell(){
        return $this->Labell;

        }
        public function setPrix($Prix){
            $this->Prix=$Prix;

    }
    public function getPrix(){
        return $this->Prix;

        }
        public function setQuantite($Quantite){
            $this->Quantite=$Quantite;

    }
    public function getQuantite(){
        return $this->Quantite;

        }
        public function setPhoto($Photo){
            $this->Photo=$Photo;

    }
    public function getPhoto(){
        return $this->Photo;

        }
        public function setRank($Rank){
            $this->Rank=$Rank;

    }
    public function getRank(){
        return $this->Rank;

        }
        public function setCodeBrand($CodeBrand){
            $this->CodeBrand=$CodeBrand;

    }
    public function getCodeBrand(){
        return $this->CodeBrand;

        }


}
?>