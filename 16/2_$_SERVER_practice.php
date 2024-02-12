<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet" 
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
      crossorigin="anonymous"
    >
  </head>
  <body>
    <?php
      $url = explode("/", $_SERVER["SCRIPT_NAME"]);
      // var_dump($url);
      echo $url[count($url) - 1];
      $php = explode(".", $url[count($url) - 1]);
    ?>

    <h1 class="text-center p-2 my-3">Super Global - SERVER!</h1>
    <h2 class="text-center p-2 my-3">
      <?php echo"SCRIPT_NAME: " . $url[count($url) - 1]; ?>
    </h2>
    <h2 class="text-center p-2 my-3">
      <?php echo"EXTENSION: " . $php[count($php) - 1]; ?>
    </h2>

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <td>Name</td>
          <td>Value</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach($_SERVER as $key => $value): ?>
          <tr>
            <td><?=$key?></td>
            <td><?=$value?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
      crossorigin="anonymous"
    ></script>
  </body>
</html>
