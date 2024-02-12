<?php

  // TODO Script: Write a PHP function that inserts a new item ia an array in any position

  $original_array = array(1,2,3,4,5,7,8,9);

  function insert(array $array, mixed $element, int $index) {
    $new_array = [];

    foreach($array as $key => $value) {
      if ($key == $index) {
        $new_array[] = $element;
      }
      $new_array[] = $value;
    }
    return $new_array;
  }

  print_r(insert($original_array, 6, 5));
