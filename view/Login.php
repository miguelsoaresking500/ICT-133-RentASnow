<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 10.01.2020
 * Time: 14:48
 */

ob_start();
$title = "RentASnow - Login";


?>

<div class="container">
    <h1>Login</h1>
    <form action="index.php?action=tryLogin" method="post">

        <input type="text" name="email" placeholder="Username"  required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>


