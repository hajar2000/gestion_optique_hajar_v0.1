<?php
require_once("CommandeService.php");
 $CommandeService =new CommandeService();
 if(isset($_session['client'])){
    $CommandeService->PasserCommande();
 }else
 {
    header("location:login.php");
 }

?>