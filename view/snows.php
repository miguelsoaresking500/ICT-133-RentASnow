<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 10.01.2020
 * Time: 14:48
 */

ob_start();
$title = "RentASnow - Snows";
?>

<!-- ________ SLIDER_____________-->
<div class="row-fluid">
    <div class="camera_full_width">
        <div id="camera_wrap">
            <div data-src="view/images/slider/5.jpg">
                <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à disposition.</div>
            </div>
            <div data-src="view/images/slider/1.jpg">
                <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des sensations.</div>
            </div>
            <div data-src="view/images/slider/2.jpg"></div>
        </div>
        <br style="clear:both"/>
    </div>
</div>

<!-- ________ Products_____________-->
<div class="">
    <h1>Les Snows</h1>
    //boucle qui nous affiche la liste des snows
    <?php foreach ($snows as $products) { ?>
        <div class="row mt-8">
            <h4 class="col-10"><a>Modele:</a><?= $products['model'] ?></h4>
        </div>
        <div class="row ml-9"><a>Marque:</a><?= $products['brand'] ?></div>
        <div class="row ml-9"><a>description:</a><?= $products['description'] ?></div>
        <div><IMG src="view/images/<?= $products['photo'] ?>" class="row ml-6"></div>
        <div class="row ml-9"><a>prix neuf:</a><?= $products['pricenew'] ?></div>
        <div class="row ml-9"><a>prix bon:</a><?= $products['pricegood'] ?></div>
        <div class="row ml-9"><a>prix vieux:</a><?= $products['priceold'] ?></div>


    <?php } ?>
</div>


<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
