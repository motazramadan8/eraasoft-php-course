<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Functions</title>
  </head>
  <body style="font-family: Arial">
    <?php $user_name = "Motaz Ramadan"; ?>
    <!-- <section>
      <h1>
        <?=$user_name?>
      </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe,
        adipisci?
      </p>

      <hr />

      <h1>
        <?=$user_name?>
      </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe,
        adipisci?
      </p>

      <hr />

      <h1>
        <?=$user_name?>
      </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe,
        adipisci?
      </p>

      <hr />
    </section> -->

    <section>
      <?php
        function print_data() {
          global $user_name;
          echo "<h1>$user_name</h1>";
          echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci?</p>";
          echo "<hr>";
        }
      ?>
      <?php print_data() ?>
      <?php print_data() ?>
      <?php print_data() ?>
    </section>
  </body>
</html>
