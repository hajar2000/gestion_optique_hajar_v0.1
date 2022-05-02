<?php
require_once("InscriptionService.php");
require_once("Client.php"); 
if(isset($_POST['pNom']) and !empty($_POST['pNom']) and isset($_POST['pPrenom']) and !empty($_POST['pPrenom']) and isset($_POST['pTelephone']) and !empty($_POST['pTelephone'])
and isset($_POST['pAdresse']) and !empty($_POST['pAdresse']) and isset($_POST['pMail']) and !empty($_POST['pMail']) and isset($_POST['pLogin']) and !empty($_POST['pLogin'])
and isset($_POST['pPassword']) and !empty($_POST['pPassword'])){
    $client=new Client();
    $client->setNom($_POST['pNom']);
    $client->setMail($_POST['pMail']);
    $client->setTelephone($_POST['pTelephone']);
    $client->setPassword($_POST['pPassword']);
    $client->setAdresse($_POST['pAdresse']);
    $client->setPrenom($_POST['pPrenom']);
    $client->setLogin($_POST['pLogin']);
    $inscriptionServ=new InscriptionService();
    $inscriptionServ->subscribe($client);


}else{

    echo "Data error Empty|Unset";
}





?>