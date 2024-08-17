<?php

  // ** set cookie
  setcookie("lang", "en", time()+3600);

  echo $_COOKIE['lang'];