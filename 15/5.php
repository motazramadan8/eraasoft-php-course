<?php

  // TODO Script: Write a php function to get maximum number in array without built in function

  $numbers = [5,6,9,8,2,5,6,3,1,4,7,8,9,0,6,-2,21,3,-5.2,100];
  $new_numbers = [];

  // echo max($numbers);

  function max_num(array $array) : int | float | bool {
    if (!empty($array)) {
      $max_number = $array[0];
      foreach($array as $value) {
        if ($max_number < $value) {
          $max_number = $value;
        }
      }
      return $max_number;
    } else {
      return false;
    }
  }

  echo max_num($numbers);
  echo max_num($new_numbers);
