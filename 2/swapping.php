<?php
  $x = 5;
  $y = 10;
  $z = $x;

  $x = $y;
  $y = $z;

  echo $x . "<br>"; // 10
  echo $y; // 5
