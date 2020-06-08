<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 08.06.2020
 * Time: 10:56
 */

?>
    <form action="index.php?action=tryinsert" method="post">
<FORM>
    <SELECT name="Module" size="1">
        <?php foreach ($module as $modules){?>
        <option><?php echo $modules["moduleShortName"];?></option>
        <?php } ?>
    </SELECT>
</FORM>
    <FORM>
    <SELECT name="Student" size="3">
        <?php foreach ($student as $students){?>
            <option><?php echo $students["Fullname"];?></option>
        <?php } ?>
    </SELECT>
    </FORM>
    <FORM>
        <SELECT name="Eval" size="1">
            <?php foreach ($eval as $evals){?>
                <option value="<?php echo $evals["idEvaluation"];?>"><?=$evals["testDescription"]?></option>
            <?php } ?>
        </SELECT>
    </FORM>
    <input type="text" id="note" name="note" size="1"  >
    <input type="submit" value="OK">
    </form>
<?php

?>