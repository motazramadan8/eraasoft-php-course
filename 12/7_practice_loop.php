<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Table">
    <title>Practice - Loops</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php
      $colors = ["red", "green", "blue", "gray", "black", "yellow" , "orange"];
      $count = count($colors);
      $i = 0;
      while ($i < $count):
    ?>
      <ul class="mt-2">
        <li scope="row">
          <?php
            if ($colors[$i] == "green") {
              echo "<span class=\"bg-success\" style=\"color: #fff; padding: 5px; border-radius: 5px;\";>$colors[$i]</span>";
            } elseif ($colors[$i] == "red") {
              echo "<span class=\"bg-danger\" style=\"color: #fff; padding: 5px; border-radius: 5px;\">$colors[$i]</span>";
            } elseif ($colors[$i] == "blue") {
              echo "<span class=\"bg-primary\" style=\"color: #fff; padding: 5px; border-radius: 5px;\">$colors[$i]</span>";
            } elseif ($colors[$i] == "gray") {
              echo "<span style=\"background: gray; color: #fff; padding: 5px; border-radius: 5px;\">$colors[$i]</span>";
            } elseif ($colors[$i] == "black") {
              echo "<span style=\"background: #000; color: #fff; padding: 5px; border-radius: 5px;\">$colors[$i]</span>";
            } elseif ($colors[$i] == "yellow") {
              echo "<span class=\"bg-warning\" style=\"color: #fff; padding: 5px; border-radius: 5px;\">$colors[$i]</span>";
            } elseif ($colors[$i] == "orange") {
              echo "<span style=\"background: #fd7e14; color: #fff; padding: 5px; border-radius: 5px;\">$colors[$i]</span>";
            } else {
              echo $colors[$i];
            }
            $i++;
          ?>
        </li>
      </ul>
    <?php endwhile; ?>
  </body>
</html>
