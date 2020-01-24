<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 24.01.2020
 * Time: 13:56
 */

ob_start();
$title = "RentASnow - showUser";
?>
<div>
    <table class="table">
        <thead>
        <th>User </th>
        <th>id</th>
        <th> Btn </th>
        <?php
        foreach ($liste as $user){
            echo "<tr>";
            echo "<td> $user[user]</td>";
            echo "<td> $user[id]</td>";
            echo "<td> <form action=\"/index.php?action=DelUser\" method=\"post\"> <button name=$user[id] class='btn btn-danger'>Delete User</button> </form></td>";
            echo "</tr>";
        }
        ?>
    </table>

</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
