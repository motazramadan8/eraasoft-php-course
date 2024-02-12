<?php

  $students = [
    "Motaz",
    "Mohammed",
    "Hany",
    "Ahmed",
    "Nader",
    "Hassan"
  ];

  function rand_student($students) {
    $rand_student =  rand(0, count($students) - 1);
    echo $students[$rand_student];
    echo "<br>";
  }

  rand_student($students);
  rand_student($students);
  rand_student($students);
