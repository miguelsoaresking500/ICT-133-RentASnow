<?php
/**
 *  Titre:Page qui affiche les details
 *  Author: Miguel Soares
 *  Creation date: Janvier 2020.
 */
ob_start();
require_once "view/helpers.php";
$title = "RentASnow - Snows"
?> <br>
    <div class="text-center">
        <img src="view/images/<?= $snow['photo'] ?>" class="imagedetail">
        <h2><?= $snow['brand'] ?><?= $snow['model'] ?></h2>
        <br>
    </div>
    <div>


        <table class="table">
            <tr>
                <tr><th>Code: </th><td><?= $snow['code'] ?></td></tr>
                <tr><th>Taille:</th><td><?= $snow['length'] ?></td> </tr>
                <tr><th>État : </th><td><?= getTextState($snow['state']) ?></td> </tr>
                <tr><th>Disponible :</th><td><?= $snow['available'] ? 'Oui' : 'Non' ?></td> </tr>
            </tr>

        </table>

        <h4>Nous n'avons pas de snows de ce type</h4>

    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>