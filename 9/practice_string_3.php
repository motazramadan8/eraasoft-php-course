<?php

  $text = "Lorem ipsum dolor eraasoft sit, amet consectetur adipisicing elit
  Officiis, quidem eraasoft praesentium placeat eraasoft fugit ist
  alias eraasoft nobis praesentium amet eraasoft similique placeat.";

  function str_count($string, $word) {
    // Get length of string
    $str_len = strlen($string);

    // Get length of "eraasoft" in string
    $eraasoft_len = strlen($word);

    // Delete eraasoft from string
    $new_str = str_replace($word, "", $string);

    // Get length of string
    $new_str_len = strlen($new_str);

    // Get sum first length - last length
    $str_after_delete_eraasoft_len = $str_len - $new_str_len;

    // Divide the result by the number of letters of the word Eraasoft
    $eraasoft_count = $str_after_delete_eraasoft_len / $eraasoft_len;

    return "<h1>The count of word: $eraasoft_count</h1>";
  }

  echo str_count($text, "eraasoft");
