<?php

  echo "<pre>";
  
  print_r($_REQUEST);

  if (count($_GET) != 0) {
    print_r($_GET);
    echo "Username: " . $_GET["user_name"] . "<br/>";
    echo "Email: " . $_GET["user_email"] . "<br/>";
    echo "Password: " . $_GET["user_password"] . "<br/>";
  } else {
    print_r($_POST);
    echo "Username: " . $_POST["user_name"] . "<br/>";
    echo "Email: " . $_POST["user_email"] . "<br/>";
    echo "Password: " . $_POST["user_password"] . "<br/>";
  }