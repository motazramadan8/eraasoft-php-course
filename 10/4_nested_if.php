<?php

  // number is even , < 50
  $number = rand(1, 100);

  if ($number % 2 == 0) {
    if ($number < 50) {
      echo "Number $number is smaller than 50";
    } else {
      echo "Number $number is greater than 50";
    }
  } else {
    echo "Number $number is odd";
  }
