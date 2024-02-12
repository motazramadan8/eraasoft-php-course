<?php
  // 1) What is variables
  /*
    an abstract storage location paired with an
    associated symbolic name, which contains
    some known or unknown quantity of
    data or object referred to as a value
  */

  // 2) Create variable
  $user_name = "Motaz";
  echo "1-" . $user_name . "<br>";

  echo "<br>";

  $first_value = "Eng / Motaz Ramadan";
  $second_value = $first_value;
  echo "first value: " . $first_value . "<br>";
  echo "second value: " . $second_value . "<br>";
  echo "<br>";

  // 3) Override
  $user_name = "Ramadan";
  echo "2-" . $user_name . "<br>";
  echo "<br>";

  // Practice on variables 
  // In folder "2"

  // 4) Variable on variable
  $name = "motaz";
  $$name = "name..";

  echo $$name . "<br>";
  echo "<br>";

  // 5) Constants
  # 1) First way
  define("EXAMPLE", "Constants");
  echo EXAMPLE . "<br>";
  
  # 1) Second way
  const TAX = 50;
  echo TAX . "<br>";