<?php

/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
 */

function sortArrayByStringsByLength( array $strings ): array{
    usort( $strings, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $strings;
}

$sortingArray = ["apple", "banana", "pear", "orange", "kiwi"];
$sortedArrayByStrings = sortArrayByStringsByLength( $sortingArray );
print_r( $sortedArrayByStrings );

echo "\n";

/*
2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
 */

function concatenateFromEnd( string $str1, string $str2 ): string {
    $len1 = strlen( $str1 );
    $len2 = strlen( $str2 );

    if ( $len2 > $len1 ) {
        $temp = $str1;
        $str1 = $str2;
        $str2 = $temp;
        $len1 = strlen( $str1 );
        $len2 = strlen( $str2 );
    }

    $result = "";

    for ( $i = 0; $i < $len1; $i++ ) {
        $result .= $str1[$i];

        if ( $i >= ( $len1 - $len2 ) ) {
            $result .= $str2[$i - ( $len1 - $len2 )];
        }

    }

    return $result;
}

$str1 = "Hello, world!";
$str2 = "123";
$result = concatenateFromEnd( $str1, $str2 );
echo $result;

echo "\n";
echo "\n";

/*
3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
 */
function removeFirstAndLast( $arr ) {
    array_shift( $arr );
    array_pop( $arr );
    return $arr;
}

$Array = removeFirstAndLast( [1, 2, 3, 4, 5] );
print_r( $Array );

/*
4.Write a PHP function to check if a string contains only letters and whitespace.
 */

function containsOnlyLettersAndWhitespace( $str ) {
    return preg_match( '/^[a-zA-Z\s]+$/', $str );
}

$string1 = "This is a string with    only letters and whitespace";

if ( containsOnlyLettersAndWhitespace( $string1 ) ) {
    echo "String 1 contains only letters and whitespace";
}

echo "\n";
echo "\n";

/*
5.Write a PHP function to find the second largest number in an array of numbers.
 */

function findSecondLargest( $arr ) {
    $largest = $arr[0];
    $secondLargest = $arr[0];

    foreach ( $arr as $num ) {

        if ( $num > $largest ) {
            $secondLargest = $largest;
            $largest = $num;
        } else

        if ( $num > $secondLargest && $num != $largest ) {
            $secondLargest = $num;
        }

    }

    return $secondLargest;
}

$numbers = [2, 4, 6, 8, 10];
$secondLargest = findSecondLargest( $numbers );
echo "The second largest number in the array is: " . $secondLargest;