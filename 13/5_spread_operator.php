<?php

  function getTotalPrices(...$total) : int {
    $totalNum = 0;
    $i = 0;
    while ($i < count($total)) {
      $totalNum += $total[$i];
      $i++;
    }
    return $totalNum;
  }

  echo getTotalPrices(5, 10, 60, 100, 200);
