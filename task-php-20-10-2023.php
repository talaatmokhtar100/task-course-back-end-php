<?php
// 1-Change this number to check if it's even or odd
$number = 6; 

if ($number % 2 == 0) {
    echo "$number is even.";
} else {
    echo "$number is odd.";
}
?>



<?php
// 2-fizz Buzz game

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
?>

<?php
// 3-Reverse a String (e., "welcome" becomes "emoclew"):

$string = "welcome"; // Change this string to reverse it

$reversed = strrev($string);
echo $reversed;
?>



<?php
//4- Compute Circle Area and Circumference 

$radius = 5; // Change this radius to compute area and circumference

$area = M_PI * $radius * $radius;
$circumference = 2 * M_PI * $radius;

echo "Circle Area: $area\n";
echo "Circle Circumference: $circumference";
?>


<?php
// 5-Check if one of two given numbers is 50 or if their sum is 50:

function isFifty($num1, $num2) {
    return ($num1 == 50 || $num2 == 50 || $num1 + $num2 == 50);
}

$number1 = 20; // Change these two numbers to check
$number2 = 30;

if (isFifty($number1, $number2)) {
    echo "True, one of the numbers is 50 or their sum is 50.";
} else {
    echo "False, neither of the numbers is 50 and their sum is not 50.";
}
?>

<?php
//6-Check if one of two given integers is positive and the other is negative:

function checkPositiveNegative($num1, $num2) {
    return (($num1 > 0 && $num2 < 0) || ($num1 < 0 && $num2 > 0));
}

$int1 = 5; // Change these two integers to check
$int2 = -3;

if (checkPositiveNegative($int1, $int2)) {
    echo "True, one number is positive and the other is negative.";
} else {
    echo "False, both numbers have the same sign.";
}
?>

<?php
// 7-Check if a given positive number is a multiple of 5 or a multiple of 8:

function isMultipleOfFiveOrEight($number) {
    return ($number % 5 == 0 || $number % 8 == 0);
}

$positiveNumber = 24; // Change this number to check

if (isMultipleOfFiveOrEight($positiveNumber)) {
    echo "True, the number is a multiple of 5 or 8.";
} else {
    echo "False, the number is not a multiple of 5 or 8.";
}
?>

<?php
//8-Find the largest of three given integers
function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}

$num1 = 15; // Change these three numbers to find the largest
$num2 = 7;
$num3 = 22;

$largest = findLargest($num1, $num2, $num3);
echo "The largest number is: $largest";
?>

<?php
//9-Compute the sum of numbers from 1 to 10:

$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo "The sum of numbers from 1 to 10 is: $sum";
?>


<?php

//11-check whether a given number is positive or negative



    if ($number > 0) {
        echo "The number $number is positive.";
    } elseif ($number < 0) {
        echo "The number $number is negative.";
    } else {
        echo "The number is zero, which is neither positive nor negative.";
    }


$number = -5; // Change this number to check


?>


<?php
//13-Print the sum of two numbers:

function printSum($num1, $num2) {
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $sum";
}

$number1 = 5; // 
$number2 = 10;

printSum($number1, $number2);
?>




