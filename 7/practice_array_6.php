<?php

  $total_prices = [11, 20, 66, 44, 100, 70, 80];

  // 1st way
  $i = 0;

  $total = 0;
  $total = $total + $total_prices[$i];
  $total = $total + $total_prices[++$i];
  $total = $total + $total_prices[++$i];
  $total = $total + $total_prices[++$i];
  $total = $total + $total_prices[++$i];
  $total = $total + $total_prices[++$i];
  $total = $total + $total_prices[++$i];
  echo $total;

  echo "<br>";

  // 2st way
  echo $total_prices[0] + $total_prices[1] + $total_prices[2] + $total_prices[3] + $total_prices[4] + $total_prices[5] + $total_prices[6];

  echo "<br>";

  // 3st way
  echo array_sum($total_prices);

  echo "<pre>";
  print_r($total_prices);
