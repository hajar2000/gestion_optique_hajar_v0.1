<?php
session_start();
require_once("Connexion.php");

class InscriptionService{
private  $DbConnectInstance=null;
public function __construct(){


}

  public function login($pClient){
    $ClientSession=null;
    try {
      // Create connection
      $con = new Connexion();
      $this->DbConnectInstance=$con->getConnexionInstance();
      $responseClient=$this->DbConnectInstance->prepare("select *  from client where login =:plogin and password=:ppassword");
      $responseClient->execute(array("plogin"=>$pClient->getLogin(),"ppassword"=>$pClient->getPassword()));
      $CodeClient=0;
      
      if($responseClient !=null){
        //Create a new user 
        echo "Client has been successfully found!<br/>";//à supprimer , header redirection vers la page index
        $ClientSession=new Client();
        while($data=$responseClient->fetch()){
          $ClientSession->setCodeClient($data['codeClient']);
          $ClientSession->setNom($data['nom']);
          $ClientSession->setMail($data['mail']);
          $ClientSession->setTelephone($data['telephone']);
          $ClientSession->setAdresse($data['adresse']);
          $ClientSession->setPrenom($data['prenom']);
          $ClientSession->setLogin($data['login']);
          $_SESSION['client']=$ClientSession;
         // print_r($_SESSION['client']);// à supprimer dev
          
           break;


         }
       
    
      }else{
          echo "Error login : No client has been found";


      }
      
    } catch (Exception $e) {
      die("Error Login =>".$e->getMessage());
    
    }
    

  }
  public function logout(){
  
    session_unset();
    session_destroy();

  }
  
  public function subscribe($Client){
    try {
  // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
  
  $response=$this->DbConnectInstance->prepare("insert into client (nom,prenom,telephone,adresse,mail,login,password) values (:pnom,:pprenom,:ptelephone,:padresse,:pmail,:plogin,:ppassword)");
  $Nom=$Client->getNom();
  $Mail=$Client->getMail();
  $Telephone=$Client->getTelephone();
  $Password=$Client->getPassword();
  $Adresse=$Client->getAdresse();
  $Prenom=$Client->getPrenom();
  $Login=$Client->getLogin();
  $Data= array("pnom" =>$Nom,
              "pprenom"=>$Prenom,
              "ptelephone"=>$Telephone ,
              "padresse"=>$Adresse,
              "pmail"=>$Mail,
              "plogin"=>$Login,
              "ppassword"=>md5($Password));
  $response->execute($Data);
  if($response !=null){
    //Create a new user 
    echo "Client has been successfully created!";
    $responseCodeClient=$this->DbConnectInstance->prepare("select max(codeClient) as maxCodeClient from client");
    $responseCodeClient->execute();
    $CodeClient=0;
    while($data=$responseCodeClient->fetch()){
            
            $CodeClient=$data['maxCodeClient'];
            echo   $CodeClient;
            break;


    }
    $responseCodeClient->closeCursor();
     
    $responseNewUser=$this->DbConnectInstance->prepare("insert into users (codeClient,codeProfil,statusUser) values(:pcodeClient,:pcodeProfil,:pstatusUser)");
    $DataUser= array("pcodeClient"=>$CodeClient,"pcodeProfil"=>2,"pstatusUser"=>1);
    $responseNewUser->execute($DataUser);
    if($responseNewUser !=null){
      echo "User has been successfully created!";//redirection to index  header location
    }

  }
  
} catch (Exception $e) {
  die("Error =>".$e->getMessage());
}

}




}
?>