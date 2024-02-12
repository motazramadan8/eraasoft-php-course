<?php

  echo "Replace \"Lorem\" to \"Eraasoft\"";

  $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit
  Officiis, quidem praesentium placeat reprehenderit fugit ist 
  necessitatibus alias nobis similique placeat.";

  echo "<br><br>" . $text;

  $new_str =  str_replace("Lorem", "Eraasoft", $text);

  echo "<br><br>" . $new_str . "<br><br>";

  echo strpos($new_str, "elit");
  echo "<br>";
  echo str_contains($new_str, "elit");
