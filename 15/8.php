<?php

  // TODO Script: Write a PHP program which iterates the integers from 1 to 100. or multiples of three print "three" instead of the number and for the multiples of five print "five". For numbers which are multiples of both three and five "three and five".

  for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 != 0) {
      echo "$i three \n";
    }
    if ($i % 5 == 0 && $i % 3 != 0) {
      echo "$i five \n";
    }
    if ($i % 5 == 0 && $i % 3 == 0) {
      echo "$i three and five \n";
    }
  }
?>

<?php

  // TODO Script: Write a PHP program which iterates the integers from 1 to 100. or multiples of three print "three" instead of the number and for the multiples of five print "five". For numbers which are multiples of both three and five "three and five".

  for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0 && $i % 3 == 0) {
      echo "$i three and five \n";
    } elseif ($i % 3 == 0) {
      echo "$i three \n";
    } elseif ($i % 5 == 0) {
      echo "$i five \n";
    }
  }
?>
