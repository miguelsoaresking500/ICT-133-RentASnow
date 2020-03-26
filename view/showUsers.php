<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 24.01.2020
 * Time: 13:42
 */

ob_start();
$title = "RentASnow - showUsers";
?>
<div>
    <table class="table">
        <thead>
        <th>id</th>
        <th>Email </th>
        <th>phonenumber</th>
        <?php
        foreach ($liste as $user){
            echo "<tr>";
            echo "<td> $user[id]</td>";
            echo "<td> $user[email]</td>";
            echo "<td> $user[phonenumber]</td>";

            echo "</tr>";
        }
        ?>
    </table>
    <form action="/index.php?action=modifUser" method="post">
        <button class="btn btn-danger" name="Change">Change</button>
    </form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
