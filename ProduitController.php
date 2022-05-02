<?php
session_start();
require_once("GestionProduitService.php");

$gestionProduitsService=new GestionProduitService();
$ListeProduits= $gestionProduitsService->listeProduits();

$_SESSION['produits']=$ListeProduits;
//header("Location:index.php");

?>