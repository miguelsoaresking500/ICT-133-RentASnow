<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 08.06.2020
 * Time: 10:56
 */


if (isset($_POST["store"])) {
    extract($_POST); // idEval, idStudent, $gradeValue
    $newGrade = insert("Insert into grade (gradeValue,fkStudent,fkEval) values (:grade,:student,:eval)",
        [
            "grade" => $gradeValue,
            "student" => $idStudent,
            "eval" => $idEval
        ]);
}
?>


    <form method="post">
        <BR>
        <BR>
    <SELECT name="Module" size="1">
        <?php foreach ($module as $modules){?>
        <option><?php echo $modules["moduleShortName"];?></option>
        <?php } ?>
    </SELECT>
        <BR>
        <BR>
    <SELECT name="student" size="3">
        <?php foreach ($student as $students){?>
            <option value="<?= $student['idPerson'] ?>"><?php echo $students["Fullname"];?></option>
        <?php } ?>
    </SELECT>
        <BR>
        <BR>
        <SELECT name="eval" size="1">
            <?php foreach ($eval as $evals){?>
                <option value="<?php echo $evals["idEvaluation"];?>"><?=$evals["testDescription"]?></option>
            <?php } ?>
        </SELECT>
<BR>
        <BR>
    <input type="text" name="grade" id="grade" name="note" size="1"  >
    <input type="submit" value="OK">
    </form>

<?php
var_dump($_POST);
?>