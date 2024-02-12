<?php

  // Pass by value
  function fillColor($color) {
    $color = "green";
    return "Color Is $color";
  }

  $color = "red";

  echo fillColor($color);

  echo "\n";

  echo $color;

  echo "\n";

  // Pass by reference
  function fillColor2(&$color) {
    $color = "green";
    return "Color Is $color";
  }

  $color = "red";

  echo fillColor2($color);

  echo "\n";

  echo $color;