<?php

$num = 5;
// Using if statement
/*

if ($num > 0) {
    $result = 'positive';
}

*/

$result = ($num > 0) ? 'positive' : '';

/*

if ($num < 0) {
    $result = "negative ";
    if ($num < -10) {
        $result = "value is below -10";
    }
} else {
    $result = "its zero";
}

*/

$result = ($num < 0) ? "negative" . ($num < -10 ? "value is below -10" : '') : "its zero";
