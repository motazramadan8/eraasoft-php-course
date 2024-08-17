<?php

  session_start();
  require_once "./core/validations.php";
  $errors = [];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = trim(filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_SPECIAL_CHARS));
    $user_email = trim(filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_EMAIL));
    $user_password = trim($_POST["user_password"]);
    $user_email = trim($_POST["user_confirm_password"]);

    if (!required_input($user_name)) {
      $errors[] = "Username is required";
    } elseif (length_input($user_name, 3, "lt")) {
      $errors[] = "Username must be at least 3 characters";
    } elseif (length_input($user_name, 40, "gt")) {
      $errors[] = "Username must be less than 40 characters";
    }

    if (!required_input($user_email)) {
      $errors[] = "Email is required";
    } elseif (email_input($user_email)) {
      $errors[] = "Please enter valid email address";
    }

    if (!required_input($user_password)) {
      $errors[] = "Password is required";
    } elseif (length_input($user_password, 8, "lt")) {
      $errors[] = "Password must be at least 8 characters";
    }

    if (!confirm_password($user_password, $user_email)) {
      $errors[] = "Password & confirm password must be identical";
    }

    if (empty($errors)) {
      $_SESSION["user_name"] = $user_name;
      $_SESSION["user_email"] = $user_email;
      $_SESSION["user_password"] = $user_password;
      header("location:feed.php");
    } else {
      $_SESSION["errors"] = $errors;
      header("location:index.php");
    }
  } else {
    echo "<h1>Not supported method</h1>";
  }
