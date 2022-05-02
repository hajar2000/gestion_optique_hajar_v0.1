<?php
require_once("InscriptionService.php");
require_once("Client.php"); 
if( isset($_POST['pUserName']) and !empty($_POST['pUserName'])
and isset($_POST['pUserPassword']) and !empty($_POST['pUserPassword'])){
    $client=new Client();
    $client->setPassword(md5($_POST['pUserPassword']));
    $client->setLogin($_POST['pUserName']);
   
    $inscriptionServ=new InscriptionService();
    $inscriptionServ->login($client);
    header("location:index.php");

}else
{

    echo "Data error Empty|Unset";
    header("location:login.php");
}





?>