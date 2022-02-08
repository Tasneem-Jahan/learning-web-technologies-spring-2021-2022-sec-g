<?php

function rectangle($length, $width)
{
    echo "<b>Length of the Rectangle:</b> " . $length . "<br>" . "<b>Width of the Rectangle:</b> " . $width . "<br>";
    echo "<b>Area of the rectangle:</b> " . $length * $width;
}

echo rectangle(2, 2);
