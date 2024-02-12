<?php

  // Get number 1
  $number1 = rand(0, 100);

  // Get number 2
  $number2 = rand(0, 100);

  // Get the operator (+ , - , * , /)
  $operators = ["-", "+", "*", "/"];
  $operator = $operators[rand(0,3)];

  if ($operator == "+") {
    echo "$number1 + $number2 = ";
    echo $number1 + $number2;
  } elseif ($operator == "-") {
    echo "$number1 - $number2 = ";
    echo $number1 - $number2;
  } elseif ($operator == "*") {
    echo "$number1 * $number2 = ";
    echo $number1 * $number2;
  } elseif ($operator == "/") {
    echo "$number1 / $number2 = ";
    echo $number1 / $number2;
  } else {
    echo "Type correct operator";
  }