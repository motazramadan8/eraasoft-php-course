<?php
  // Normal way
  $price = "50";
  echo $price . "<br>"; // 50 => as string
  echo gettype($price) . "<br>"; // string

  // Type casting
  $price = (int) "30";
  echo $price . "<br>"; // 30 => as integer
  echo gettype($price) . "<br>"; // integer
  
  // Type casting
  $price = (float) "30";
  echo $price . "<br>"; // 30 => as float
  echo gettype($price) . "<br>"; // float
