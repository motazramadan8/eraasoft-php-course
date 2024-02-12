<?php

  $text = "<br> We are learning string in php course with eraasoft <br>";

  // Length
  echo strlen($text);

  // Limit
  echo substr($text, 0, 20);

  // Replace
  echo str_replace("string", "number", $text);

  // Find
  echo str_contains($text, "eraasoft"); // true => 1
  echo "<br>";
  echo strpos($text, "eraasoft"); // search index of string => 47

  // Upper
  echo strtoupper($text);

  // Lower
  echo strtolower($text);

  // Words count
  echo str_word_count($text);

  // Repeat
  echo str_repeat($text, 3);

  // shuffle
  echo str_shuffle($text);
  echo "<br>";

  // reverse
  echo strrev($text);
  echo "<br>";

  // Empty
  echo empty($text);