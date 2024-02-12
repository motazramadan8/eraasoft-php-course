<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (strlen($_POST["user_name"]) < 3) {
      echo "Username must be at least 3 characters";
      die();
    } elseif (strlen($_POST["user_name"]) > 20) {
      echo "Username must be less than 20 characters";
      die();
    }
    echo "Hello: " . $_POST["user_name"];
  } else {
    echo "<h1><mark>Not supported method ^_^</mark></h1>";
  }
