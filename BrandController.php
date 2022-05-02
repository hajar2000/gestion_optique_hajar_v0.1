<?php
session_start();
require_once("BrandService.php");

$BrandService=new BrandService();
$ListeBrands= $BrandService->listeBrands();


$_SESSION['brands']=$ListeBrands;



?>