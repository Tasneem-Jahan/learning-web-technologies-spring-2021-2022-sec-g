<?php

$date = isset($_POST['date']) ? $_POST['date'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task 02</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <input type="date" name="date" value="<?= $date ?>">
            <?= $date ?>
            <hr>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>