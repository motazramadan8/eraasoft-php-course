<?php

  for ($i = 1; $i <= 30; $i++) {
    echo $i . "\n";
    if ($i == 25) {
      break;
    }
  }

  echo "\n";

  for ($i = 1; $i <= 30; $i++) {
    if ($i == 10) {
      continue;
    }
    echo $i . "\n";
  }
