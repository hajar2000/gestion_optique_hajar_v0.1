<?php
class ProduitAchete {

    private $CodeProduit;
    private $QuantiteDemandee;
    private $PrixTotal;

    public function __construct(){}

    public function getCodeProduit(){
        return $this->CodeProduit;
    }
    public function setCodeProduit($CodeProduit=null){

        $this->CodeProduit=$CodeProduit;
    }
    public function getQuantiteDemandee(){
        return $this->QuantiteDemandee;
    }
    public function setQuantiteDemandee($QuantiteDemandee=null){

        $this->QuantiteDemandee=$QuantiteDemandee;
    }

    public function getPrixTotal(){
        return $this->PrixTotal;
    }
    public function setPrixTotal($PrixTotal=null){

        $this->PrixTotal=$PrixTotal;
    }

    




}

?>