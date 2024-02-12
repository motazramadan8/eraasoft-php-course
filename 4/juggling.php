<?php
  // Type juggling
  $count = 5;
  $tax = "15";

  $total = $count + $tax;

  echo $total . "<br>";
  echo gettype($total) . "<br>";



  $count = 5.5;
  $tax = "15";

  $total = $count + $tax;

  echo $total . "<br>";
  echo gettype($total) . "<br>";



  $count = 5;
  $tax = "15 pounds";

  $total = $count + $tax;

  echo $total . "<br>";
  echo gettype($total) . "<br>";



  $count = 5;
  $tax = "pounds 15";

  $total = $count + $tax;

  echo $total . "<br>";
  echo gettype($total) . "<br>";



  $count = 5;
  $tax = "A";

  $total = $count + $tax;

  echo $total . "<br>";
  echo gettype($total) . "<br>";
