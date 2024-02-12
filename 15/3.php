<?php

  // TODO Script: Draw this pattern in cli
  
  /*

    *
    *  *
    *  *  *
    *  *  *  *
    *  *  *  *  *
    *  *  *  *  *  *
    *  *  *  *  *  *  *
    *  *  *  *  *  *  *  *
    *  *  *  *  *  *  *  *  *
    *  *  *  *  *  *  *  *  *  *

  */

  $rows = 10;

  function draw_pattern(int $rows) {
    for($i = 1; $i <= $rows; $i++) {
      for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
      }
      echo "\n";
    }
  }

  draw_pattern(5);
  echo "\n";
  draw_pattern(10);
  echo "\n";
  draw_pattern(15);
