<?php

  session_start();

  $_SESSION["user_name"] = "Motaz Ramadan";
  $_SESSION["user_email"] = "motazramadan198@gmail.com";

  echo "<a href='profile.php'>Go</a>";