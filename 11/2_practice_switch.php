<?php

  $colors = ["yellow", "red", "green", "blue", "orange", "black"];
  $color = $colors[rand(0, (count($colors) - 1))];

  switch ($color) {
    case "red":
      echo "color: red";
      break;

    case "blue":
      echo "color: blue";
      break;

    case "green":
      echo "color: green";
      break;

    case "orange":
      echo "color: green";
      break;

    case "black":
      echo "color: green";
      break;

    default:
      echo "color: unknown";
      break;
  }
