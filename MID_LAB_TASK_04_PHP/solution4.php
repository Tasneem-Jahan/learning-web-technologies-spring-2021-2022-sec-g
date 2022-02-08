<?php

$numbers = [220, 40, 80];

$max = $numbers[0];

for ($i = 1; $i < 3; $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}

echo "Maximum number: " . $max;
