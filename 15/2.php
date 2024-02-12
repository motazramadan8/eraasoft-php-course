<?php

  // TODO Script: Reverse the string without any built in functions in php

  $string = "eraasoft";

  function rev_str(string $string) : string {
    $new_string = "";
    $strlen = strlen($string);
    for ($i = ($strlen - 1); $i >= 0; $i--) {
      $new_string .= $string[$i];
    }
    return $new_string;
  }

  echo rev_str($string);
  echo "\n";
  echo rev_str("javascript");
