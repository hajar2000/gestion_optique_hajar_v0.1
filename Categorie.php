<?php

class Categorie{
private $CodeCategorie;
private $LabellCategorie;

public function Categorie(){

    
}

public function setCodeCategorie($CodeCategorie){
    $this->CodeCategorie=$CodeCategorie;
}
public function getCodeCategorie(){
return $this->CodeCategorie;
}
public function setLabellCategorie($Labellcategorie){
    $this->Labellcategorie=$Labellcategorie;
}
public function getLabellCategorie(){
return $this->LabellCategorie;
}



}
?>