<?php
/**
 *  Titre:Page qui affiche les details
 *  Author: Miguel Soares
 *  Creation date: Janvier 2020.
 */
ob_start();
$title = "RentASnow - Snows"
?>
<div class="text-center">
    <img src="view/images<?=$snowtype['photo']?>" class="detailimage" alt="">
    <h2><?=$snowtype['brand']?><?=$snowtype['model']?></h2>
    <br>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>