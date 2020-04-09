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
    <div class="row-fuid">

        <h2>Votre Panier</h2>
        <br>
    </div>
    <div>
            <table class="table table-striped">
                <tr>
                    <th>Snowboard</th>
                    <th>Code</th>
                    <th>Taille</th>


                </tr>
                <?php foreach ($cartContent as $snow) { ?>
                        <th><?= $snow['brand'] ?><?= $snow['model'] ?></th>
                        <th><?= $snow['code'] ?></th>
                        <th><?= $snow['length'] ?></th>


                    </tr>
                <?php } ?>
            </table>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?><?php
