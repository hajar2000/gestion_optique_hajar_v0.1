<?php
class Brand{

private $CodeBrand;
private $Mark;
private $Type;
private $Categorie;

public function Brand(){}

public function setCodeBrand($CodeBrand){
    $this->CodeBrand=$CodeBrand;

}
public function getCodeBrand(){
return $this->CodeBrand;

}
public function setMark($Mark){
    $this->Mark=$Mark;

}
public function getMark(){
return $this->Mark;

}
public function setType($Type){
    $this->Type=$Type;

}
public function getType(){
return $this->Type;

}

public function setCategorie($Categorie){
    $this->Categorie=$Categorie;
}
public function getCategorie(){
return $this->Categorie;
}


}
?>