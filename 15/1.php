<?php

  // TODO Script: Write a script to add all the integers between 2 random numbers and display the sum if the number is not odd
  
  $num1 = rand(0, 100);
  $num2 = rand(0, 100);
  
  function sumEvenNumbers(int | float $num1, int | float $num2) : int | string {
    $sum = 0;

    if ($num1 > $num2) {
      return "Wrong inputs";
    }

    for ($i = $num1; $i <= $num2; $i++) {
      if ($i % 2 == 0) {
        $sum += $i;
      }
    }
    return $sum . "\n";
  }

  $sum = sumEvenNumbers($num1, $num2);
  echo "Num1: $num1\nNum2: $num2\n";
  echo "Sum of even numbers: $sum\n";
