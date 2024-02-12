<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Table">
    <title>Practice - Loops</title>
  </head>
  <body>
    <?php
      $colors = ["red", "green", "blue", "white", "black", "yellow" , "orange"];
      $count = count($colors);
      $i = 0;
      while ($i < $count):
    ?>
      <ul>
        <li scope="row">
          <?php
            echo $colors[$i];
            $i++;
          ?>
        </li>
      </ul>
    <?php endwhile; ?>
  </body>
</html>
