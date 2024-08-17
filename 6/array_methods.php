<?php
  $colors = ["red", "green", "yellow", 25, true];

  // Count number of elements in array
  echo "<h2>Count number of elements in array</h2>";
  echo count($colors) . "<br/>";

  // Put element at the beginning of the array --> array_unshift()
  echo "<h2>Put element at the beginning of the array --> array_unshift()</h2>";
  array_unshift($colors, "black", "white");
  echo "<pre>";
  print_r($colors);
  echo "</pre>";

  // Put element at the end of the array --> array_push() || $array[] = "";
  echo '<h2>Put element at the end of the array --> array_push() || $array[] = "";</h2>';
  $colors[] = "gray";
  array_push($colors, "blue");
  echo "<pre>";
  print_r($colors);
  echo "</pre>";

  // replace element --> on index
  echo '<h2>replace element --> on index</h2>';
  $colors[5] = "pink";
  echo "<pre>";
  print_r($colors);
  echo "</pre>";

  // remove element --> unset
  echo '<h2>remove element --> unset</h2>';
  unset($colors[6]);
  echo "<pre>";
  print_r($colors);
  echo "</pre>";

  // remove first element in array --> array_shift()
  echo '<h2>remove last element in array --> array_shift()</h2>';
  array_shift($colors);
  echo "<pre>";
  print_r($colors);
  echo "</pre>";

  // remove last element in array --> array_pop()
  echo '<h2>remove last element in array --> array_pop()</h2>';
  array_pop($colors);
  echo "<pre>";
  print_r($colors);
  echo "</pre>";

  // Sum all the numbers of the array --> array_sum()
  echo '<h2>Sum all the numbers of the array --> array_sum()</h2>';
  $total_prices = [11, 20, 66, 44, 100, 70, 80, 9];
  echo array_sum($total_prices);

  // Get random number from number to number --> rand()
  echo '<h2>Get random number from number to number --> rand()</h2>';
  echo rand(1, 100)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array methods</title>
</head>
<body style="font-family: Arial;"></body>
</html>
