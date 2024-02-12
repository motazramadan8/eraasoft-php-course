<?php

// Declaraion
function sayHello() {
  echo "<h1>Hello</h1>";
}

// Calling
sayHello();
// Invoking
sayHello();
// Trigger
sayHello();


// Declaraion
function sum() {
  echo 5 + 5 . "<br>";
}

// Calling
sum();
// Invoking
sum();
// Trigger
sum();

echo "<br>";

function plus($num1, $num2) {
  echo "<h3>$num1 + $num2 = " . $num1 + $num2 . "</h3>";
}

plus(10 , 50);
plus(100 , 250);
plus(900 , 1);



$number1 = 20;
$number2 = 35;

function plus2($num1, $num2) {
  echo "<h3>$num1 + $num2 = " . $num1 + $num2 . "</h3>";
}

plus2($number1, $number2);