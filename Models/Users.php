<?php
class Users{
    private  $CodeUser;
    private $CodeClient;
    private $CodeProfil;
    private $StatusUser;
    public function Users(){
        
    }

    public function setCodeUser($CodeUser){
        $this->CodeUser=$CodeUser;
    }
    public function getCodeUser(){
        $this->CodeUser;
    }
    public function setCodeClient($CodeClient){
        $this->CodeClient=$CodeClient;
    }
    public function getCodeClient(){
        $this->CodeClient;
    }
    public function setCodeProfil($CodeProfil){
        $this->CodeProfil=$CodeProfil;
    }
    public function getCodeProfil(){
        $this->CodeProfil;
    }
    public function setStatusUser($StatusUser){
        $this->StatusUser=$StatusUser;
    }
    public function getStatusUser(){
        $this->StatusUser;
    }

}
?>