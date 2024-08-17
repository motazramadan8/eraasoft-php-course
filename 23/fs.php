<?php

  // 1) Open connection with file system (FS)
  $file = fopen("data.txt", "r+");
  
  // 2) Close connection with file system (FS)
  fclose($file);
