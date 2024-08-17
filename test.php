<?php

  $a = new stdClass;
  $a->name = "Motaz";

  echo $a->name;
  echo "\n";
  echo gettype($a->name);
  echo "\n";
  echo gettype($a);

  echo "\n";
  echo "\n";
  
  $str = "10";
  echo $str;
  echo "\n";
  echo gettype($str);
  echo "\n";
  echo (int) $str;
  echo "\n";
  echo gettype((int) $str);
  
  echo php_uname();
  echo "<br>";
  echo PHP_VERSION;
  echo "<br>";
  echo PHP_OS_FAMILY;
  echo "<br>";
  echo PHP_INT_MAX;
  echo "<br>";
  echo PHP_FLOAT_MAX;
  echo "<br>";
  echo DEFAULT_INCLUDE_PATH;
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo __LINE__;
  echo "<br>";
  echo __FILE__;
  echo "<br>";
  echo __DIR__;
