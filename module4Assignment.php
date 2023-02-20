<?php

//1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
$arr = array( "Coding", "Problems", "Algorithm", "Programming", "Binary", "Math", "Flow Chart", "Graph", "AI" );

usort( $arr, "comparatorFunc" );

echo "1.The sorted array of string is : " . PHP_EOL;
for ( $i = 0; $i < count( $arr ); $i++ ) {
    echo $arr[$i] . PHP_EOL;
}

function comparatorFunc( $x, $y ) {
    if ( $x == $y ) {
        return 0;
    }

    if ( $x < $y ) {
        return -1;
    } else {
        return 1;
    }

}
echo PHP_EOL;

//2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
$str1 = "Hello";
$str2 = "Ostaad!";

$strt = strConcatenate( $str1, $str2 );

echo "2.After concatenate the new string becomes : " . PHP_EOL;
printf( "%s\n", $strt );

function strConcatenate( $str1, $str2 ) {
    $strt = $str1 . $str2;
    return $strt;
}
echo PHP_EOL;

//3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
$arr = array( "Removing", "First", "And", "Last", "Element", "Of", "Array", "Program" );
$retArr = removingElemnt( $arr );
echo "3.After removing the fast and the last element the new array becomes : " . PHP_EOL;
for ( $i = 0; $i < count( $retArr ); $i++ ) {
    echo $retArr[$i] . PHP_EOL;
}

function removingElemnt( $arr ) {
    array_shift( $arr );
    array_pop( $arr );
    return $arr;
}
echo PHP_EOL;

//4.Write a PHP function to check if a string contains only letters and whitespace.
$str = "Welcome to the test 3.";
echo "4.Given string : " . $str . PHP_EOL;
if ( retVal( $str ) ) {
    echo "The string only contains letter and white space." . PHP_EOL;
} else {
    echo "The string doesn't only contains letter and white space." . PHP_EOL;
}

function retVal( $str ) {
    $is_NotNum = true;
    $strArr = explode( ' ', $str );
    for ( $i = 0; $i < count( $strArr ); $i++ ) {
        for ( $j = 0; $j < strlen( $strArr[$i] ); $j++ ) {
            if ( $strArr[$i][$j] >= 0 && $strArr[$i][$j] <= 9 ) {
                $is_NotNum = false;
                return $is_NotNum;
            }
        }
    }
    return $is_NotNum;
}
echo PHP_EOL;

//5.Write a PHP function to find the second largest number in an array of numbers.
$arr = array( 9, 26, 1, 18, 4, 21, 7, 14, 15, 12 );
echo "5.The second largest number of the array is : " . PHP_EOL;
echo secondLargest( $arr ) . PHP_EOL;

function secondLargest( $arr ) {
    sort( $arr );
    return $arr[count( $arr ) - 2];
}