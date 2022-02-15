<?php

$gender = isset($_POST['gender']) ? $_POST['gender'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task 02</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>GENDER</legend>
            <input type="radio" name="gender" value="<?= $gender ?>" /> Male
            <input type="radio" name="gender" value="<?= $gender ?>" />Female
            <input type="radio" name="gender" value="<?= $gender ?>" />Other
            <?= $gender ?>
            <hr>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>