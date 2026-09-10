<?php
    $a = 1;
    $b = -5;
    $c = 6;

    $delta = $b**2 - 4 * $a * $c;

    if ($delta < 0) echo "zero miejsc zerowych"; 
    elseif ($delta > 0) echo "dwa miejsca zerowych x1: " . (-$b - sqrt($delta)) / (2 * $a) . " x2: " . (-$b + sqrt($delta)) / (2 * $a);
    else echo "zero miejsc zerowych x0: " . -$b / (2 * $a);
?>