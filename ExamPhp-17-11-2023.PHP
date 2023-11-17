Question1 : What is The Output 

1-somerar is 16
2-NULL
3-true

//______________________________

Question 2 : Write Php Code To Solve These Problems 


1- Write a PHP program to print fibonacci series. 


<?php
function fibonacci($n){
    $fibonacci_series = array();
    $fibonacci_series[0] = 0;
    $fibonacci_series[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci_series[$i] = $fibonacci_series[$i - 1] + $fibonacci_series[$i - 2];
    }

    return $fibonacci_series;
}


$n = 10;


$result = fibonacci($n);


echo "Fibonacci Series for the first $n terms: ";
foreach ($result as $value) {
    echo $value . " ";
}
?>

//_________________________________________
2- . How do you check if a year is leap or not? 

<?php

function isLeapYear($year) {
  if ($year % 4 == 0 && $year % 100 != 0) {
    return true;
  } else if ($year % 400 == 0) {
    return true;
  } else {
    return false;
  }
}

$year = 2000;

if (isLeapYear($year)) {
  echo "$year is a leap year";
} else {
  echo "$year is not a leap year";
}

?>
//___________________________________________________
3- Write a PHP script to generate unique random numbers within a 
range

<?php

function generateUniqueRandomNumbers($min, $max, $count) {
    if ($count > $max - $min + 1) {
        throw new Exception("Cannot generate more unique numbers than the range allows.");
    }

    $randomNumbers = [];

    while (count($randomNumbers) < $count) {
        $randomNumber = random_int($min, $max);

        if (!in_array($randomNumber, $randomNumbers)) {
            array_push($randomNumbers, $randomNumber);
        }
    }

    return $randomNumbers;
}

$min = 1;
$max = 100;
$count = 10;

$uniqueRandomNumbers = generateUniqueRandomNumbers($min, $max, $count);

echo "Unique random numbers: ";
echo implode(", ", $uniqueRandomNumbers);
?>

____________________________________
4- Write a PHP program to print out the multiplication table upto 5*5

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>جدول الضرب</h1>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    for ($j = 1; $j <= 5; $j++) {
                        $product = $i * $j;
                        echo "<td>$product</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
//____________________________________
5- Write a PHP program to remove duplicates from a sorted list

<?php
function removeDuplicates($sortedList) {
    $uniqueList = array_unique($sortedList);
    return $uniqueList;
}


$sortedList = array(1, 2, 2, 3, 4, 4, 4, 5, 5);


$uniqueList = removeDuplicates($sortedList);


echo "Original List: " . implode(", ", $sortedList) . "\n";
echo "List without Duplicates: " . implode(", ", $uniqueList);
?>
//___________________________________________________
6-

<?php


function isPalindrome($str) {
  $str = strtolower($str);
  $str = preg_replace('/[^\w]/', '', $str);
  $len = strlen($str);
  for ($i = 0; $i < $len / 2; $i++) {
    if ($str[$i] !== $str[$len - $i - 1]) {
      return false;
    }
  }
  return true;
}


function getFirstNonRepeatingCharacter($str) {
  $seen = [];
  for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (!isset($seen[$char])) {
      $seen[$char] = 1;
    } else {
      $seen[$char]++;
    }
  }

  foreach ($seen as $char => $count) {
    if ($count === 1) {
      return $char;
    }
  }

  return '';
}


$str = 'racecar';
if (isPalindrome($str)) {
  echo 'The string "' . $str . '" is a palindrome.';
} else {
  echo 'The string "' . $str . '" is not a palindrome.';
}


$str = 'aabbccdd';
$firstNonRepeatingCharacter = getFirstNonRepeatingCharacter($str);
if ($firstNonRepeatingCharacter !== '') {
  echo 'The first non-repeating character in the string "' . $str . '" is "' . $firstNonRepeatingCharacter . '".';
} else {
  echo 'There is no first non-repeating character in the string "' . $str . '".';
}

//_____________________________________________________________
//Question 3 : True Or False 

//1- False
//2- False
//3- True
//4- True
//5- True
?>