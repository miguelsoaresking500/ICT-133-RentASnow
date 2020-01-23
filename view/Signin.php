<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 10.01.2020
 * Time: 14:48
 */

ob_start();
$title = "RentASnow - Singin";


?>

<div class="container">
    <h1>Sign In</h1>
    <form action="index.php?action=trySignin" method="post">

        <input type="text" name="user" placeholder="Username"  required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Sign In</button>
    </form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>


