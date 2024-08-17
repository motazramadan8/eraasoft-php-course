<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = trim(filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_STRING));
    $user_email = trim(filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_EMAIL));

    if (empty(($user_name))) {
      echo "Please enter username";
      die();
    } elseif (strlen($user_name) < 3) {
      echo "Username must be at least 3 characters";
      die();
    } elseif (strlen($user_name) > 50) {
      echo "Username must be less than 50 characters";
      die();
    }

    if (empty($user_email)) {
      echo "Email is required";
      die();
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
      echo "Please enter valid email address";
      die();
    }

    echo "<h1>Hello: " . strip_tags($_POST["user_name"]) . "</h1>";
    echo "<h1>" . strip_tags($user_email) . "</h1>";
  } else {
    echo "<h1><mark>Not supported method ^_^</mark></h1>";
  }

