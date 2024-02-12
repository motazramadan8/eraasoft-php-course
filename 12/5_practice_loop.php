<?php

  $colors = ["red", "green", "blue", "white", "black", "yellow" , "orange"];
  $count = count($colors);

  // For loop
  for ($i = 0; $i < $count; $i++) {
    echo $i + 1 . ") " . $colors[$i] . "\n";
  }

  echo "\n";

  // While loop
  $j = 0;
  while ($j < $count) {
    echo $j + 1 . ") " . $colors[$j] . "\n";
    $j++;
  }
