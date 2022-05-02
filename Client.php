<?php

    class Client {
        
        private  $CodeClient;
        private $Nom;
        private $Prenom;
        private $Telephone;
        private $Adresse;
        private $Mail;
        private $Login;
        private $Password;

        public function __construct(){
           
        }
        public function setCodeClient($CodeClient){
            $this->CodeClient=$CodeClient;
        }

        public function getCodeClient(){

            return $this->CodeClient;
        }
      
        public function setNom($Nom){
            $this->Nom=$Nom;
        }
        public function getNom(){

            return $this->Nom;
        }
        public function setPrenom($Prenom){
            $this->Prenom=$Prenom;
        }
        public function getPrenom(){

            return $this->Prenom;
        }

        public function setMail($Mail){
            $this->Mail=$Mail;
        }
        public function getMail(){

            return $this->Mail;
        }
        public function setTelephone($Telephone){
            $this->Telephone=$Telephone;
        }
        public function getTelephone(){

            return $this->Telephone;
        }
        public function setAdresse($Adresse){
            $this->Adresse=$Adresse;
        }
        public function getAdresse(){

            return $this->Adresse;
        }
        public function setLogin($Login){
            $this->Login=$Login;
        }
        public function getLogin(){

            return $this->Login;
        }

        public function setPassword($Password){
            $this->Password=$Password;
        }
        public function getPassword(){

            return $this->Password;
        }
       

       
       

        public function showInformation(){
            
                echo "NumeroClient : ".$this->NumeroClient."<br/>";
                


        }


    }
?>