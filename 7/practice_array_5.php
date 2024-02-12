<?php

  $colors = ["red", "green", "blue", "white", "orange", "black", "yellow"];

  $reversed_array = array_reverse($colors);

  $i = 0;

  echo "<ul>";
  echo "<li>";
  echo $colors[$i];
  echo "</li>";
  echo "<li>";
  echo $colors[++$i];
  echo "</li>";
  echo "<li>";
  echo $colors[++$i];
  echo "</li>";
  echo "<li>";
  echo $colors[++$i];
  echo "</li>";
  echo "<li>";
  echo $colors[++$i];
  echo "</li>";
  echo "<li>";
  echo $colors[++$i];
  echo "</li>";
  echo "<li>";
  echo $colors[++$i];
  echo "</li>";
  echo "</ul>";

  echo "<pre>";
  print_r($reversed_array);
