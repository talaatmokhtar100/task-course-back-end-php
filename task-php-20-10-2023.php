// 1-Change this number to check if it's even or odd
<?php

function isEven($number)
{
    return $number % 2 === 0;
}

function isOdd($number)
{
    return $number % 2 !== 0;
}

$number = 10;

if (isEven($number)) {
    echo "$number is an even number.";
} else {
    echo "$number is an odd number.";
}

?>




<?php
// 2-fizz Buzz game

<?php

function fizzBuzz($number)
{
    if ($number % 3 === 0 && $number % 5 === 0) {
        echo "FizzBuzz";
    } elseif ($number % 3 === 0) {
        echo "Fizz";
    } elseif ($number % 5 === 0) {
        echo "Buzz";
    } else {
        echo $number;
    }
}

for ($i = 1; $i <= 100; $i++) {
    fizzBuzz($i);
    echo "<br>";
}

?>

// 3-Reverse a String (e., "welcome" becomes "emoclew"):

<?php

function reverseString($string)
{
    $reversedString = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }
    return $reversedString;
}

$string = "welcome";
$reversedString = reverseString($string);

echo $reversedString;

?>




//4- Compute Circle Area and Circumference 
<?php

$radius = 5; // Change this radius to compute area and circumference

$area = M_PI * $radius * $radius;
$circumference = 2 * M_PI * $radius;

echo "Circle Area: $area\n";
echo "Circle Circumference: $circumference";
?>


// 5-Check if one of two given numbers is 50 or if their sum is 50:
<?php

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


//6-Check if one of two given integers is positive and the other is negative:

<?php
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


// 7-Check if a given positive number is a multiple of 5 or a multiple of 8:

<?php
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

//8-Find the largest of three given integers

<?php

function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}

$num1 = 15; // Change these three numbers to find the largest
$num2 = 7;
$num3 = 22;

$largest = findLargest($num1, $num2, $num3);
echo "The largest number is: $largest";
?>

//9-Compute the sum of numbers from 1 to 10:

<?php

$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo "The sum of numbers from 1 to 10 is: $sum";
?>


<?php

//10- display the pattern like right angle triangle using an asterisk.

<?php

function displayTriangle($rows)
{
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

$rows = 5;

displayTriangle($rows);

?>
<?php


//11-check whether a given number is positive or negative

<?php

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


//12 store elements in an array and print it.
//Test Data:
//Input 10 elements in the array:
//element - 0:1 element - 1:1
//element - 2:2

<?php

function storeAndPrintArray($elements)
{
    $array = [];
    foreach ($elements as $element) {
        $array[] = $element;
    }

    echo "The array is: ";
    print_r($array);
}

$elements = [1, 1, 2];

storeAndPrintArray($elements);



//13-Print the sum of two numbers:

<?php
function printSum($num1, $num2) {
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $sum";
}

$number1 = 5; // 
$number2 = 10;

printSum($number1, $number2);
?>


//14 calculate the factorial of a given number Test Data:
//Input the number : 5
//Expected Output:
//The Factorial of 5 is: 120

<?php

function factorial($number)
{
    if ($number <= 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Input the number
$number = 5;

// Calculate the factorial
$factorial = factorial($number);

// Display the output
echo "The Factorial of $number is: $factorial";

?>

//15-Create Simple Calculator (+, -, *, /)

<?php

function calculate($number1, $number2, $operator)
{
    switch ($operator) {
        case "+":
            return $number1 + $number2;
        case "-":
            return $number1 - $number2;
        case "*":
            return $number1 * $number2;
        case "/":
            return $number1 / $number2;
        default:
            return "Invalid operator.";
    }
}

// Get the input from the user
$number1 = readline("Enter the first number: ");
$number2 = readline("Enter the second number: ");
$operator = readline("Enter the operator (+, -, *, /): ");

// Calculate the result
$result = calculate($number1, $number2, $operator);

// Display the result
echo "The result is: $result";

?>


