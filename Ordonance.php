<?php

class Ordonnance{
private $CodeOrdonnance;
private $CodeClient;
private $Photo;

public function Ordonnance(){


}
 public function setCodeOrdonnance($CodeOrdonnance){
            $this->CodeOrdonnance=$CodeOrdonnance;
        }
        public function getCodeOrdonnance(){

            return $this->CodeOrdonnance;
        }
        public function setCodeClient($CodeClient){
            $this->CodeClient=$CodeClient;
        }
        public function getCodeClient(){

            return $this->CodeClient;
        }
        public function setPhoto($Photo){
            $this->Photo=$Photo;
        }
        public function getPhoto(){

            return $this->Photo;
        }
}
?>