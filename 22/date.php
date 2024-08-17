<?php

  echo time();

  echo "<br>";

  echo date("Y-m-d h:i:s A");

  echo "<br>";

  echo strtotime("2009-10-27 10:00:00");

  echo "<br>";
  
  $time = strtotime("first day of this month");
  echo date("Y-m-d", $time);
  echo "<br>";
  echo date("D Y-m-d", $time);
  echo "<br>";
  echo date("l Y-m-d", $time);
  echo "<br>";
  echo date("D Y-m-d", $time);
  echo "<br>";
  echo date("M Y-m-d", $time);

  echo "<br>";
  
  echo date_default_timezone_get();
  
  echo "<br>";
  
  date_default_timezone_set("Africa/Cairo");
  echo date_default_timezone_get();
