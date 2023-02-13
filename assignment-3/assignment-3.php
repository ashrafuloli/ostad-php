<?php

/*
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
 */

function evenOrOdd( $num ) {

    if ( $num % 2 == 0 ) {
        return "$num is an even number";
    } else {
        return "$num is an odd number";
    }

}

echo evenOrOdd( 32 );

echo "\n";

/*
2. 1+2+3...…….100  Write a loop to calculate the summation of the series
 */

$sum = 0;

for ( $i = 1; $i <= 100; $i++ ) {
    $sum += $i;
}

echo "The sum of the series is: $sum";