<?php
  // Indexed Array
  $colors = ["red", "blue", "yellow"];
  echo $colors[0];
  echo "<br>";
  echo $colors[1];
  echo "<br>";
  echo $colors[2];
  echo "<br> <br>";

  // Associative Array
  $student = [
    "name" => "Motaz",
    "email" => "motaz@gmail.com",
    "phone" => "01015615644",
  ];
  echo $student["name"];
  echo "<br>";
  echo $student["email"];
  echo "<br>";
  echo $student["phone"];
  echo "<br> <br>";

  // Multidimensional Array
  $products = [
    ["#1 product", 50],
    ["#2 product", 200],
    ["#3 product", 70],
  ];
  echo $products[0][0] . " " . $products[0][1];
