<?php

  // ----------------------------
  // -- Super Global Variables --
  // ----------------------------
  // [1] Syntax
  // [2] Refer To
  // ----------------------------

  // 1- $GLOBALS
  $GLOBALS;
  $x = 50;
  function getX() {
    // global $x;
    $GLOBALS["x"] = 100;
    // $x = 100;
    echo $GLOBALS["x"];
  }

  getX();
  echo "\n";
  echo $x;
  echo "\n";


  // 2- $_SERVER
  print_r($_SERVER);
  echo "<br> \n";
  print_r($_SERVER["HTTP_HOST"]);
  print_r($_SERVER["ProgramFiles"]);

  // 3- $_GET
  print_r($_GET);

  // 4- $_REQUEST
  print_r($_REQUEST);

  // 5- $_ENV
  // 6- $_FILE
  // 7- $_POST
  // 8- $_COOKIE
  // 9- $_SESSION
