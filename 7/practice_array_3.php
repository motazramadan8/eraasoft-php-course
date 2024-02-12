<?php
  $colors = ["red", "green", "blue", "white"];

  $blue = $colors[2];
  $white = $colors[3];

  $colors[2] = "orange";
  $colors[3] = "yellow";
  $colors[4] = "black";
  $colors[5] = $blue;
  $colors[6] = $white;

  echo "<pre>";
  print_r($colors);