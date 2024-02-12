<?php
  // Add $new_colors value to $old_colors array
  $old_colors = ["red", "green", "blue"];
  $new_colors = ["white", "black"];

  // 1st way
  $old_colors[count($old_colors)] = "white";
  $old_colors[count($old_colors)] = "black";

  // 2st way
  $old_colors[] = "white";
  $old_colors[] = "black";

  // 3st way
  array_push($old_colors, "white", "black");

  echo "<pre>";
  print_r($old_colors);