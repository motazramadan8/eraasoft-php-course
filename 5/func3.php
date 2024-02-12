<?php
  function return_value($num1, $num2) {
    return $num1 + $num2;
  }

  $val = return_value(50, 100);

  echo $val;

  echo "<br>";

  function get_full_name ($first_name, $last_name) {
    return $first_name . " " . $last_name;
  }

  $full_name = get_full_name("Motaz", "Ramadan");

  echo $full_name;
