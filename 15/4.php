<?php

  // TODO Script: Write a php function to get minimum number in array without built in function

  $numbers = [5,6,9,8,2,5,6,3,1,4,7,8,9,0,6,-2,21,3,-5.2];
  $new_numbers = [];

  // echo min($numbers);

  function min_num(array $array) : int | float | bool {
    if (!empty($array)) {
      $min_number = $array[0];
      foreach($array as $value) {
        if ($min_number > $value) {
          $min_number = $value;
        }
      }
      return $min_number;
    } else {
      return false;
    }
  }

  echo min_num($numbers);
  echo min_num($new_numbers);
