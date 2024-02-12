<?php

  $func = function() {
    echo "Motaz";
  };

  $func();

  $totalPrices = [10, 20, 30, 40, 50];

  $new_array = array_map(function($price) {
    if ($price > 30) {
      return $price + 50;
    }
    return $price + 10;
  }, $totalPrices);
  print_r($new_array);


  function getTotal($price) {
    if ($price > 30) {
      return $price + 50;
    }
    return $price + 10;
  }

  $new_array = array_map("getTotal", $totalPrices);
  print_r($new_array);


  $getAll = function($price) {
    if ($price > 30) {
      return $price + 50;
    }
    return $price + 10;
  };

  $new_array = array_map($getAll, $totalPrices);

  print_r($new_array);
