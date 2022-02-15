<?php

$email = isset($_POST['email']) ? $_POST['email'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task 02</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>Email</legend>
            <input type="email" name="email" value="<?= $email ?>">
            <?= $email ?>
            <hr>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>