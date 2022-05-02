<?php
require_once("InscriptionService.php");

$InscriptionService= new InscriptionService();
$InscriptionService->logout();
header("location:index.php");
?>