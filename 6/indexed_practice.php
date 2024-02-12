<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Indexed array practice</title>
  </head>
  <body style="font-family: Arial;">
    <?php
      $name = "colors";
      $$name = ["red", "green", "yellow"];
    ?>
    <h2><?=$name?></h2>
    <ul>
      <li>
        <?=$colors[0]?>
      </li>
      <li>
        <?=$colors[1]?>
      </li>
      <li>
        <?=$colors[2]?>
      </li>
    </ul>
  </body>
</html>
