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
        <img src="view/images/<?= $snowtype['photo'] ?>" class="imagedetail">
        <h2><?= $snowtype['brand'] ?><?= $snowtype['model'] ?></h2>
        <br>
    </div>
    <div>
<?php if (count($snows) > 0) { ?>
    <h4>Nous avons <?= count($snows) ?> de ce type</h4>

    <table class="table">
    <tr>
        <th>Code</th>
        <th>Taille</th>
        <th>État</th>
        <th>Disponible</th>
    </tr>
    <?php foreach ($snows as $snow) { ?>
        <tr class="clickable" data-href="?action=displayRealSnowDetails&id=<?=$snow['id']?>">
            <th><?= $snow['code'] ?></th>
            <th><?= $snow['length'] ?></th>
            <th><?= getTextState($snow['state']) ?></th>
            <th><?= $snow['available'] ?'Oui':'Non' ?></th>
        </tr>
        <?php } ?>
        </table>
    <?php }
else { ?>
        <h4>Nous n'avons pas de snows de ce type</h4>
    <?php } ?>
    </div>
    <?php
    $content = ob_get_clean();
    require "gabarit.php";
    ?>