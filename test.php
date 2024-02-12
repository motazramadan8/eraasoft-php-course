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