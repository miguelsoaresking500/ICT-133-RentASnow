<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 23.01.2020
 * Time: 12:04
 */

ob_start();
$title = "RentASnow - Settings";
?>
<div class="span12">
    <h1>My Settings</h1>
    <div> Username: <?=$_SESSION['user']?></div>
        <div > Password: <?=$_SESSION['password']?></div>
    <div class="navbar">
    <ul class="nav nav-pills ddmenu">
    <li><a href="index.php?action=changePassword">Change Password</a></li>
    </ul>
    </div>
    </div>


    <script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
    <script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
    <script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/homeview.js" type="text/javascript"></script>

    <?php
    $content = ob_get_clean();
    require "gabarit.php";
    ?>
