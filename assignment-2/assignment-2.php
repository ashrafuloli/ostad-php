<?php

/*
HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents.

1. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars.

2. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent.

3. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent.

4. If the tuition fee is below seven thousand dollars the data will be invalid.

As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.

*/

$tuitionFee = 30000;

if ( $tuitionFee > 20000 ) {
    $commission = ( $tuitionFee * 25 ) / 100;
    echo "Commission for tuituon fee {$tuitionFee} is {$commission}";
} elseif ( $tuitionFee > 10000 ) {
    $commission = ( $tuitionFee * 20 ) / 100;
    echo "Commission for tuituon fee {$tuitionFee} is {$commission}";
} elseif ( $tuitionFee > 7000 ) {
    $commission = ( $tuitionFee * 15 ) / 100;
    echo "Commission for tuituon fee {$tuitionFee} is {$commission}";
} else {
    echo "Invalid data";
}

echo "\n";

$tuitionFee = 30000;
$commission = ( $tuitionFee > 20000 ) ? $tuitionFee * 25 / 100 : (  ( $tuitionFee > 10000 ) ? $tuitionFee * 20 / 100 : (  ( $tuitionFee > 7000 ) ? $tuitionFee * 15 / 100 : "Invalid data" ) );
echo $commission;