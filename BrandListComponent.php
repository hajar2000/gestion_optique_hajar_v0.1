

<?php
//session_start();
require_once("BrandService.php");

$BrandService=new BrandService();
$ListeBrands= $BrandService->listeBrands();


$_SESSION['brands']=$ListeBrands;
?>
<div class="brands_products"><!--brands_products-->
<h2>Brands</h2>
<div class="brands-name">
    <ul class="nav nav-pills nav-stacked">
        <?php 	foreach($ListeBrands as $brand){ ?>
        <li><a href="#"> <span class="pull-right"><?=$brand->getCodeBrand();   ?></span><?= $brand->getMark();?></a></li>
        <?php } ?>
      
    </ul>
</div>
</div><!--/brands_products-->

