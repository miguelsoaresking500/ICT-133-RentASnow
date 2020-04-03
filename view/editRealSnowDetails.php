<?php
/**
 *  Titre:Page qui affiche les details
 *  Author: Miguel Soares
 *  Creation date: Janvier 2020.
 */
ob_start();
require_once "view/helpers.php";
$title = "RentASnow - Snows"
?>
    <div class="text-center">
        <img src="view/images/<?= $snow['photo'] ?>" class="imagedetail">
        <h2><?= $snow['brand'] ?><?= $snow['model'] ?></h2>
        <br>
        <form method="post" action="?action=saveSnowDetails">
            <table class="table">

                <tr>
                    <th>Code:</th>
                    <td><input type="text" name="code" value="<?= $snow['code'] ?>"></td>
                </tr>
                <tr>
                    <th>Taille:</th>
                    <td><input type="number" name="length" value="<?= $snow['length'] ?>"></td>
                </tr>
                <tr>
                    <th>État :</th>
                    <td>
                        <select name="state">
                            <option value="1" <?=($snow['state']==1) ? "selected" : "" ?>>Neuf</option>
                            <option value="2" <?=($snow['state']==2) ? "selected" : "" ?>>Ok</option>
                            <option value="3" <?=($snow['state']==3) ? "selected" : "" ?>>Vieux</option>
                            <option value="4" <?=($snow['state']==4) ? "selected" : "" ?>>Mort</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Disponible :</th>
                    <td><input type="checkbox" name="available"<?= ($snow['available']==1) ? 'checked' : '' ?>></td>
                </tr>
            </table>
            <input type="hidden" name="snowid" value="<?= $snowid ?> ">
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>