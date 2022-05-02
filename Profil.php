<?php
class Profil{
private $CodeProfil;
private $LabellProfil;
private $StatusProfil;

public Profil(){}

public function setCodeProfil($CodeProfil){
$this->CodeProfil=$CodeProfil;
}

public function getCodeProfil(){
    return $this->CodeProfil;
}
public function setLabellProfil($LabellProfil){
    $this->LabellProfil=$LabellProfil;
    }
    
    public function getLabellProfil(){
        return $this->LabellProfil;
    }
    public function setStatusProfil($StatusProfil){
        $this->StatusProfil=$StatusProfil;
        }
        
        public function getStatusProfil(){
            return $this->StatusProfil;
        }



}
?>