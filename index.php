<?php

// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

echo "Answer of Question 1";
echo PHP_EOL, PHP_EOL;

function checkEvenOdd($num) {
  if ($num % 2 == 0) {
      return "even";
  } else {
      return "odd";
  }
}

$num = 0;
echo checkEvenOdd($num);

echo PHP_EOL;
echo "===============";


echo PHP_EOL;

// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series

echo "Answer of Question 2";


echo PHP_EOL, PHP_EOL;

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The summation of the series is: $sum";


// END
