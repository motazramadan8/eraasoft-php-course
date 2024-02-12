<?php

  $x = 5;
  echo $x;

  function getX() {
    $x = 60;
    echo $x;
  }

  getX();

  $tax = 50;

  echo "\n";

  function setTax($total) {
    global $tax;
    if ($total > 200) {
      $tax = 20;
    }
  }

  echo $tax . "\n";
  setTax(350);
  echo $tax . "\n";
