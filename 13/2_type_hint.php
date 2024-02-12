<?php
declare(strict_types=1);

  function sum(int $num1, int $num2) : int | string {
    return $num1 + $num2 . "\n";
  }

  echo sum(5, 5);
  // echo sum(5.6, 5); // Fatal error
  // echo sum("5", 5); // Fatal error
  // echo sum(5, "Mohammed"); // Fatal error
