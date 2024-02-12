<?php

  $users = [
    ["name" => "khaled", "email" => "khaled@gmail.com"],
    ["name" => "mostafa", "email" => "mostafa@gmail.com"],
  ];

  // 1st Way
  for ($i = 0; $i < count($users); $i++) {
    echo $i + 1 . ") " . "name: " . $users[$i]["name"] . "\n";
    echo "email: " . $users[$i]["email"] . "\n\n";
  }

  // 2st Way
  for ($i = 0; $i < count($users); $i++) {
    echo $i + 1 . ") ";
    foreach ($users[$i] as $key => $value) {
      echo $key . ": " . $value . "\n";
    }
    echo "\n";
  }
