<?php
for ($i = 1; $i < 4; $i++) {

    for ($j = 1; $j <= $i; $j++) {

        echo "* ";
    }

    echo "<br>";
}


for ($i = 0; $i <= 3; $i++) {
    for ($j = 3 - $i; $j <= 1; $j--) {
        echo $j . " ";
    }
    echo "<br>";
}
