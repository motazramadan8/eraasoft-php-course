<?php

  $x = 5;
  echo $x;
  echo "\n";

  function getX() {
    $x = 60;
    echo $x;
  }

  getX();

  
  echo "\n";
  
  $tax = 50;
  function setTax($total) {
    global $tax;
    if ($total > 200) {
      $tax = 20;
    }
  }

  echo $tax . "\n";
  setTax(350);
  echo $tax . "\n";
