<?php
session_start();
include_once("CategorieService.php");

$CategorieService=new CategorieService();
$ListeCategories= $CategorieService->listeCategories();


$_SESSION['categories']=$ListeCategories;
print_r($_SESSION['categories']);



?>