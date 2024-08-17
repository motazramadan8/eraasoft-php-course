<?php
  // Type juggling
  $count = 5;
  $tax = "15";

  $total = $count + $tax;

  echo $total . "<br>"; // output: 20
  echo gettype($total) . "<br>"; // output: integer

  $count = 5.5;
  $tax = "15";

  $total = $count + $tax;

  echo $total . "<br>"; // output: 20.5
  echo gettype($total) . "<br>"; // output: double

  $count = 5;
  $tax = "15 pounds";

  $total = $count + $tax;

  // ? Warning: A non-numeric value encountered in C:\xampp\htdocs\course\4\juggling.php on line 26
  echo $total . "<br>"; // output: 20
  echo gettype($total) . "<br>"; // output: integer

  // ? Fatal error: Uncaught TypeError: Unsupported operand types: int + string in C:\xampp\htdocs\course\4\juggling.php:31 Stack trace: #0 {main} thrown in C:\xampp\htdocs\course\4\juggling.php on line 32
  $count = 5;
  $tax = "pounds 15";
  
  $total = $count + $tax;
  
  echo $total . "<br>";
  echo gettype($total) . "<br>";
  
  
  // ? Fatal error: Uncaught TypeError: Unsupported operand types: int + string in C:\xampp\htdocs\course\4\juggling.php:31 Stack trace: #0 {main} thrown in C:\xampp\htdocs\course\4\juggling.php on line 42
  $count = 5;
  $tax = "A";

  $total = $count + $tax;

  echo $total . "<br>";
  echo gettype($total) . "<br>";
