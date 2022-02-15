<?php

$name = isset($_POST['name']) ? $_POST['name'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" value="<?= $name ?>">
            <?php echo $name ?>
            <hr>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>