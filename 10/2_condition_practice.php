<?php

  $number1 = 50;
  $number2 = 100;

  if ($number1 > $number2) {
    echo "number1 > number2";
  }

  // Check if the number is odd or even
  $rand_num = rand(0, 100);

  if (($rand_num % 2 == 0)) {
    echo "Number is even : $rand_num";
  } else {
    echo "Number is odd : $rand_num";
  }

  echo "\n";

  // Check discount
  $price = 100;
  if ($price == 100) {
    echo "Discount is 10%";
  } elseif (200) {
    echo "Discount is 20%";
  }
