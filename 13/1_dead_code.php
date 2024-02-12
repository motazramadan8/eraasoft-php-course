<?php
  // ---------------
  // -- Dead code --
  // ---------------

  function typeHello() {
    echo "Hello From PHP Course";
  }

  // Invoking
  typeHello();

  echo "\n";

  function sum($num1, $num2) {
    if ($num1 > $num2) {
      return $num1 - $num2;
    }

    return $num2 - $num1;

    // echo "Hello"; // Dead code
  }

  echo sum(10, 5);
